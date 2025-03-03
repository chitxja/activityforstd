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
    $result = create_activity($adminActivity, $nameActivity, $detialAtivity, $dateAtivity, $memberAtivity);

    // $id = 
    $resultid = getStudentById($_SESSION['student_id']);
    // $res = getactivitybyid($id);
    if ($result) {
        echo "<script>alert('สร้างกิจกรรมสำเร็จ');</script>";
        renderView('create_activity_get', ['stdid' => $resultid]);
    } else {
        echo "<script>alert('คุณเคยสร้างกิจกรรมนี้แล้ว');</script>";
        renderView('addAdmin_get');
        exit(); 
    }
}

?>











