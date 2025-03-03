<?php

// function getCourses(): mysqli_result|bool
// {
//     $conn = getConnection();
//     $sql = 'select * from courses';
//     $result = $conn->query($sql);
//     return $result;
// }

function getjoinactivity(int $studentId): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT
                a.activity_id,
                a.uid,
                a.title,
                j.join_activity_id,
                j.join_activity_date,
                u.user_id
            FROM
                activity a
            INNER JOIN join_activity j ON a.activity_id = j.activity_id
            INNER JOIN userstd u ON j.user_id = u.user_id
            WHERE u.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $studentId);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}
function getjoinactivitybyactivityid(int $activityId): mysqli_result|bool
{
    $conn = getConnection();
    $sql = "SELECT
                c.activity_id,
                c.uid,
                c.title,
                e.join_activity_id,
                e.join_activity_date,
                s.user_id
            FROM
                activity c
            INNER JOIN userstd s ON e.user_id = s.user_id
            INNER JOIN join_activity e ON c.activity_id = e.activity_id
            WHERE e.activity_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $activityId);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}
