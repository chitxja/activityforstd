<?php

function getStudents(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'select * from userstd';
    $result = $conn->query($sql);
    return $result;
}

function getStudentById(int $id): array|bool
{
    $conn = getConnection();
    $sql = 'select * from userstd where user_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        return false;
    }
    return $result->fetch_assoc();
}
function dropactivity(int $activityid): bool
{
    $conn = getConnection();

    $sql = "DELETE FROM activity WHERE  activity_id = ?";
    $stmt = $conn->prepare($sql);


    $stmt->bind_param("i", $activityid);

    try {
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        return false;
    }
}
function jointoActivity(int $stdid, int $activityid): bool
{
    $conn = getConnection();
    $joinactivity_Date = date("Y-m-d");

    $sql = "SELECT * FROM join_activity WHERE user_id = ? AND activity_id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die(" SQL Error: " . $conn->error);
    }

    $stmt->bind_param("ii", $stdid, $activityid);


    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return false;
    } else {
        $insertQuery = "INSERT INTO join_activity (user_id, activity_id, join_activity_date) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        if (!$stmt) {
            die("SQL Error: " . $conn->error);
        }
        $stmt->bind_param("iis", $stdid, $activityid, $joinactivity_Date);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
function create_activity(int $adminid, string $nameActivity, string $detailActivity, string $dateActivity, string $memberActivity): bool
{
    $conn = getConnection();
    $sql = 'SELECT * FROM activity WHERE title = ?';
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("SQL Error: " . $conn->error);
    }
    $stmt->bind_param('s', $nameActivity);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return false;
    } else {
        $insertQuery = "INSERT INTO activity (uid, image, title, description, activity_date, location, time, enrollment, member, status) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($insertQuery);
        if (!$stmt) {
            die("SQL Error: " . $conn->error);
        }
        $image = '';
        $location = '';
        $time = '';
        $enrollment = 'รับทุกคณะ';
        $status = 'เปิดรับ';

        $stmt->bind_param("isssssssss", $adminid, $image, $nameActivity, $detailActivity, $dateActivity, $location, $time, $enrollment, $memberActivity, $status);

        return $stmt->execute();
    }
}
function editActivity(int $actvity_id, string $title, string $desciption, string $date, string $member): bool
{
    $conn = getConnection();
    $insertQuery = "UPDATE activity set title = ? , description = ? , activity_date = ? , member = ? WHERE activity_id = ?";
    $stmt = $conn->prepare($insertQuery);
    if (!$stmt) {
        die("SQL Error: " . $conn->error);
    }
    $stmt->bind_param("ssssi", $title, $desciption, $date, $member, $actvity_id);
    try {
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        return false;
    }
    return false;
}
