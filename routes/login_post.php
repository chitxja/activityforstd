<?php
$email = $_POST['email'];
$password = $_POST['password'];
$result = login($email, $password);
if ($result) {
    $unix_timestamp = time();
    $_SESSION['timestamp'] = $unix_timestamp;
    $_SESSION['student_id'] = $result['user_id'];
    $activity = getActivity();
    $id = $result['role'];
    $_SESSION['user'] = $result['role'];
    $sum = getsummember();
    
    if ($id === 'admin') {
        renderView('admin_get', ['activity' => $activity, $result, 'sum_member' => $sum]);
    }else {
        renderView('main_get', ['activity' => $activity, $result, 'sum_member' => $sum]);
    }
} else {
    $_SESSION['message'] = 'Email or Password invalid';
    renderView('login_get');
    unset($_SESSION['message']);
    unset($_SESSION['timestamp']);
}
