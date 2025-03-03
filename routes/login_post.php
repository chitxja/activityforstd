<?php
$email = $_POST['email'];
$password = $_POST['password'];
$result = login($email, $password);
if ($result) {
    $unix_timestamp = time();
    $_SESSION['timestamp'] = $unix_timestamp;
    $_SESSION['student_id'] = $result['user_id'];
    $activity = getActivity();
    // $id = $result['role'];
    $_SESSION['user'] = $result['role'];
    $sum = getsummember();
    $getid = getStudentById($_SESSION['student_id']);
    $activity = getAdminCreateActivitybyid($_SESSION['student_id']);
    $std_join = getjoinactivity($_SESSION['student_id']);
    
    if ($result['role'] === 'admin') {
        renderView('admin_get',['activity' => $activity , 'join_activity' => $std_join ,'sum_member' => $sum]);
        // renderView('admin_get', ['activity' => $activity, $result,'result' => $getid]);
    }else {
        renderView('main_get', ['activity' => $activity, $result, 'sum_member' => $sum]);
    }
} else {
    $_SESSION['message'] = 'Email or Password invalid';
    renderView('login_get');
    unset($_SESSION['message']);
    unset($_SESSION['timestamp']);
}
