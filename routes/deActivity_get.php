<?php
declare(strict_types=1);
if (!isset($_GET['activity_id'])) {
    header('Location: /activity');  
    exit();
    echo 'error';
} else {
    $activity_id = (int)$_GET['activity_id'];
    $result = dropactivity($activity_id);
    if ($result) {
        echo "<script>alert('ลบกิจกรรมสำเร็จ');</script>";
        header('Location: /admin');
    } else {
        echo "<script>alert('ลบกิจกรรมไม่สำเร็จ');</script>";
        header('Location: /activity');
        exit();
    }
}