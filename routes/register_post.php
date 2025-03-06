<?php
declare(strict_types=1);

if (!isset($_POST['id']) || !isset($_POST['fn']) || !isset($_POST['ln']) || !isset($_POST['email']) || !isset($_POST['password']) ){
    header('Location: /register');
    exit();
} else {
    $id = $_POST['id'];
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $result = register($id,$fn, $ln, $email, $pwd);
    if ($result) {
        header('Location: /login');
    } else {
        header('Location: /register');
        exit();
    }
}