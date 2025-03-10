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
$locaAtivity = $_POST['loAt'];
$enrollAtivity = $_POST['enrollAt'];
$memberAtivity = $_POST['memberAt'];
$time = $_POST['timeAt'];

$uploadDir = 'uploads/';

$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

function processImageUpload($fileInputName, $oldFilePath, $uploadDir, $allowedExtensions) {
    if (!empty($_FILES[$fileInputName]['name']) && $_FILES[$fileInputName]['error'] === UPLOAD_ERR_OK) {
        $fileExtension = strtolower(pathinfo($_FILES[$fileInputName]['name'], PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            die("Error: Invalid file type. Only JPG, PNG, and GIF are allowed.");
        }

        $newFilePath = $uploadDir . uniqid() . '.' . $fileExtension;

        if (move_uploaded_file($_FILES[$fileInputName]['tmp_name'], $newFilePath)) {
            if (!empty($oldFilePath) && file_exists($oldFilePath)) {
                unlink($oldFilePath); // ลบไฟล์เก่า
            }
            return $newFilePath;
        } else {
            die("Error uploading $fileInputName.");
        }
    }
    return $oldFilePath;
}

// อัปโหลดไฟล์รูปภาพใหม่ ถ้ามี
$uploadFile = processImageUpload('image', $_POST['oldimage'] ?? null, $uploadDir, $allowedExtensions);
$uploadFile2 = processImageUpload('image2', $_POST['oldimage2'] ?? null, $uploadDir, $allowedExtensions);
$uploadFile3 = processImageUpload('image3', $_POST['oldimage3'] ?? null, $uploadDir, $allowedExtensions);

// อัปเดตข้อมูลกิจกรรม
if (editActivity($activity_id, $nameActivity, $detialAtivity, $dateAtivity, $memberAtivity, $uploadFile, $uploadFile2, $uploadFile3, $locaAtivity, $enrollAtivity, $time)) {
    header('Location: /courses');
    exit();
} else {
    header('Location: /editadmin');
    exit();
}

?>
