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
                c.activity_id,
                c.uid,
                c.title,
                e.join_activity_id,
                e.join_activity_date,
                s.user_id
            FROM
                activity c
            INNER JOIN join_activity e ON c.activity_id = e.activity_id
            INNER JOIN userstd s ON e.user_id = s.user_id
            WHERE s.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $studentId);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}
