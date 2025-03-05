<?php

declare(strict_types=1);
if (!isset($_POST['adminid'])) {
    header('Location: /activity');
} else {
    $adminActivity = (int)$_POST['adminid'];
    $nameActivity = $_POST['nameAt'];
    $detialAtivity = $_POST['detialAt'];
    $dateAtivity = $_POST['dateAt'];
    $memberAtivity = $_POST['memberAt'];
    $uploadDir = 'uploads/';
    $fileExtension =pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

    

    $uploadFile = $uploadDir . uniqid() . '.' . $fileExtension;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        if (create_activity($adminActivity, $nameActivity, $detialAtivity, $dateAtivity, $memberAtivity,$uploadFile)) {
            header('Location: /activity');
        } else {
            echo "Error creating user";
        }
    } else {
        echo "Error uploading file.";
    }
}