<?php

$result = getStudentById($_SESSION['student_id']);
$joinactivity = getjoinactivity($_SESSION['student_id']);

renderView('profile_get',['result' => $result, 'join_activity' => $joinactivity]);