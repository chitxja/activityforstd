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
    $uploadFile = $_POST['oldimage'];
    $uploadDir = 'uploads/';
    $fileExtension =pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    
    if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $uploadFile = $uploadDir . uniqid() . '.' . $fileExtension;
    
        // อัปโหลดไฟล์ใหม่
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            die("Error uploading file.");
        }
    }
    
        if (create_activity($adminActivity, $nameActivity, $detialAtivity, $dateAtivity, $memberAtivity,$uploadFile)) {
            header('Location: /admin');
        } else {
            header('Location: /addAdmin');
            
        }
}