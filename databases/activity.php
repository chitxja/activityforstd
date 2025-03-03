<?php

function getActivity(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'select * from activity';
    $result = $conn->query($sql);
    return $result;
}
function getactivitybyid($id): array|bool
{
    $conn = getConnection();
    $sql = 'select * from activity where activity_id =  ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        return false;
    }
    return $result->fetch_assoc();

    return $result;
}
function getAdminCreateActivitybyid($id): array|bool
{
    $conn = getConnection();
    $sql = 'select * from activity where uid =  ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        return false;
    }
    return $result->fetch_all(MYSQLI_ASSOC);

    // return $result;
}
function getsummember(): array
{
    $conn = getConnection();

    // ตรวจสอบการเชื่อมต่อฐานข้อมูล
    if (!$conn) {
        die('Error: ไม่สามารถเชื่อมต่อฐานข้อมูลได้ (' . mysqli_connect_error() . ')');
    }

    $sql = 'SELECT 
                a.activity_id, 
                a.title, 
                COUNT(j.join_activity_id) AS total_join 
            FROM activity AS a
            LEFT JOIN join_activity AS j ON a.activity_id = j.activity_id
            GROUP BY a.activity_id';

    $stmt = $conn->prepare($sql);

    // ตรวจสอบว่า prepare สำเร็จหรือไม่
    if (!$stmt) {
        die('Error: ไม่สามารถ prepare SQL ได้ (' . $conn->error . ')');
    }

    $stmt->execute();
    $result = $stmt->get_result();

    return ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : [];
}
