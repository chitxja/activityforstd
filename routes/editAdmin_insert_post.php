<?php

declare(strict_types=1);

if (!isset($_POST['activity_id'])) {
    header('Location: /activity');
    exit();
}

$activity_id = (int)$_POST['activity_id'];
$nameActivity = $_POST['nameAt'];
$detialAtivity = $_POST['detialAt'];
$dateAtivity = $_POST['dateAt'];
$memberAtivity = $_POST['memberAt'];
$uploadFile = $_POST['oldimage']; // ใช้รูปเดิมเป็นค่าเริ่มต้น
$uploadDir = 'uploads/';

// ตรวจสอบว่ามีการอัปโหลดไฟล์ใหม่หรือไม่
if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $uploadFile = $uploadDir . uniqid() . '.' . $fileExtension;

    // อัปโหลดไฟล์ใหม่
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        die("Error uploading file.");
    }
}

// อัปเดตข้อมูลกิจกรรมในฐานข้อมูล
if (editActivity($activity_id, $nameActivity, $detialAtivity, $dateAtivity, $memberAtivity, $uploadFile)) {
    header('Location: /admin');
    exit();
} else {
    echo "Error updating activity";
}
?>
