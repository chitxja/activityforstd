<?php

function login(String $username, String $password): array|bool
{
    $conn = getConnection();
    $sql = 'select * from userstd where email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows == 0)
    {
        return false;
    }
    $row = $result->fetch_assoc();

    if(password_verify($password, $row['password']))
    {
        return $row;
    }else
    {
        return false;
    }
}
function register(string $id , String $fn, String $ln, String $email, String $pwd): bool
{
    $conn = getConnection();
    $sql = 'insert into userstd (std_id, firstname, lastname, email, password) values (?, ?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss",$id, $fn, $ln, $email, password_hash($pwd, PASSWORD_DEFAULT));
    $stmt->execute();
    if($stmt->affected_rows > 0)
    {
        return true;
    }else
    {
        return false;
    }
}



function logout():void
{
    unset($_SESSION['timestamp']);
}
