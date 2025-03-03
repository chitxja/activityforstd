<?php
declare(strict_types=1);
if (!isset($_GET['activity_id']) ) {
    header('Location: /profile');
    exit;
}else {
    $id = (int)$_GET['activity_id'];
    $resultid = getStudentById($_SESSION['student_id']);
    $res = getactivitybyid($id);
    if ($res) {
        renderView('activity_get',['result' => $res,'stdid' => $resultid]);
    }else{
        echo 'error';
    }
    


}
?>