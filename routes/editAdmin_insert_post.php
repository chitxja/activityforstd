<?php

declare(strict_types=1);
if (!isset($_POST['activity_id'])) {
    header('Location: /activity');
} else {
    $activity_id = (int)$_POST['activity_id'];
    $nameActivity = $_POST['nameAt'];
    $detialAtivity = $_POST['detialAt'];
    $dateAtivity = $_POST['dateAt'];
    $memberAtivity = $_POST['memberAt'];
    $uploadDir = 'uploads/';
    if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        die("Error: No file uploaded or there was an upload error.");
    }
    $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

    
    $uploadFile = $uploadDir . uniqid() . '.' . $fileExtension;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        if (editActivity($activity_id, $nameActivity, $detialAtivity, $dateAtivity, $memberAtivity, $uploadFile)) {
            header('Location: /admin');
        } else {
            echo "Error creating user";
        }
    } else {
        echo "Error uploading file.";
    }
}
