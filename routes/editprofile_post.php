<?php
if (!isset($_POST['stdid'])) {
    header('Location: /profile');
} else {
    $stdid = (int)$_POST['stdid'];
    $fn = $_POST['name'];
    $ln = $_POST['lastname'];
    $email = $_POST['email'];
    // $role = $_POST['role'];
    $uploadDir = 'uploads/';
    $uploadFile = $_POST['oldimage']; // ค่าเริ่มต้นเป็นรูปเก่า

    // ตรวจสอบว่ามีการอัปโหลดไฟล์ใหม่หรือไม่
    if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $uploadFile = $uploadDir . uniqid() . '.' . $fileExtension;

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            die("Error uploading file.");
        }
    }

    // อัปเดตข้อมูลโปรไฟล์
    if (editprofile($stdid, $fn, $ln, $email, $uploadFile)) {
        header('Location: /profile');
        exit();
    } else {
        echo "Error updating profile.";
    }
    // if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        // die("Error: No file uploaded or there was an upload error.");
    // }
    // if (!empty($_FILES['image']['name'])) {
        // $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        // $uploadFile = $uploadDir . uniqid() . '.' . $fileExtension;
    // } else {
        // $uploadFile = $_POST['oldimage'];
    // }
    // $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    // $uploadFile = $uploadDir . uniqid() . '.' . $fileExtension;
    // if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        // if (editprofile($stdid, $fn, $ln, $email, $uploadFile)) {
            // header('Location: /profile');
        // } else {
            // echo "Error creating user";
        // }
    // } else {
        // echo "Error uploading file.";
    // }
}
