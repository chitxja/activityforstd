<?php
if (!isset($_GET['stdid'])||!isset($_GET['activity_id'])) {
    header('Location: /activity');
}else{
    $id = (int)$_GET['stdid'];
    $activityid = (int)$_GET['activity_id'];
    $res = jointoActivity($id,$activityid);
    if ($res) {
        header('Location: /profile');
    }else{
        echo "<script>alert('นิสิตเคยลงกิจกรรมนี้แล้ว');window.location.href = '/courses';</script>";
        // header('Location: /courses');
        exit;

    }
}
