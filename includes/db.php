<?php

function getConnection():mysqli
{
    $hostname = 'localhost';
    $dbName = 'activity';
    $username = 'admin1';
    $password = 'admin123';
    $conn = new mysqli($hostname, $username, $password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    return $conn;
}

require_once DATABASE_DIR . '/students.php';
require_once DATABASE_DIR . '/authen.php';
require_once DATABASE_DIR . '/activity.php';
require_once DATABASE_DIR . '/join_activity.php';