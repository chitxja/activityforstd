<?php
declare(strict_types=1);
if (!isset($_POST['adminid'])) {
    header('Location: /activity');
    exit();
}

$adminActivity = (int)$_POST['adminid'];
$nameActivity = $_POST['nameAt'];
$detialAtivity = $_POST['detialAt'];
$dateAtivity = $_POST['dateAt'];
$locationactivity = $_POST['loAt'];
$timeAtivity = $_POST['timeAt'];
$memberAtivity = $_POST['memberAt'];

$uploadDir = 'uploads/';

// Initialize file paths with old images (if they exist)
$uploadFile = $_POST['oldimage'] ?? null;
$uploadFile2 = $_POST['oldimage2'] ?? null;
$uploadFile3 = $_POST['oldimage3'] ?? null;

// Process Image 1
if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $uploadFile = $uploadDir . uniqid() . '.' . $fileExtension;

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        die("Error uploading image 1.");
    }
}

// Process Image 2
if (!empty($_FILES['image2']['name']) && $_FILES['image2']['error'] === UPLOAD_ERR_OK) {
    $fileExtension2 = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION);
    $uploadFile2 = $uploadDir . uniqid() . '.' . $fileExtension2;

    if (!move_uploaded_file($_FILES['image2']['tmp_name'], $uploadFile2)) {
        die("Error uploading image 2.");
    }
}

// Process Image 3
if (!empty($_FILES['image3']['name']) && $_FILES['image3']['error'] === UPLOAD_ERR_OK) {
    $fileExtension3 = pathinfo($_FILES['image3']['name'], PATHINFO_EXTENSION);
    $uploadFile3 = $uploadDir . uniqid() . '.' . $fileExtension3;

    if (!move_uploaded_file($_FILES['image3']['tmp_name'], $uploadFile3)) {
        die("Error uploading image 3.");
    }
}

if (create_activity($adminActivity, $nameActivity, $detialAtivity, $dateAtivity, $memberAtivity, $uploadFile, $uploadFile2, $uploadFile3,$locationactivity, $timeAtivity)) {
    $_SESSION['success'] = "กิจกรรมถูกสร้างเรียบร้อยแล้ว!";
    header('Location: /admin');
    exit();
} else {
    $_SESSION['error'] = "ไมสามารถสร้างกิจกรรมได้ โปรดลองอีกครั้ง!!";
    header('Location: /addAdmin');
    exit();
}
?>
