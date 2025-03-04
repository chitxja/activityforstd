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
    $result = editActivity($activity_id, $nameActivity, $detialAtivity, $dateAtivity, $memberAtivity);
    if ($result) {
        echo "<script>alert('แก้ไขกิจกรรมสำเร็จ');</script>";
        header('Location: /admin');
    } else {
        echo "<script>alert('แก้ไขกิจกรรมไม่สำเร็จ');</script>";
        header('Location: /activity');
        exit();
    }
}