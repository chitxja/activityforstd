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
    
    if ($id === 'admin') {
        renderView('admin_get', ['activity' => $activity, $result]);
    }else {
        renderView('main_get', ['activity' => $activity, $result]);
    }
} else {
    $_SESSION['message'] = 'Email or Password invalid';
    renderView('login_get');
    unset($_SESSION['message']);
    unset($_SESSION['timestamp']);
}
