<?php
if (!isset($_GET['stdid'])||!isset($_GET['activity_id'])) {
    header('Location: /activity');
}else{
    $id = (int)$_GET['stdid'];
    $activityid = (int)$_GET['activity_id'];
    $res = jointoActivity($id,$activityid);
    if ($res) {
        header('Location: /main');
    }else{
        echo "<script>alert('วิชานี้ลงทะเบียนแล้ว');window.location.href = '/activity';</script>";
        // header('Location: /activity');
        exit;

    }
}
