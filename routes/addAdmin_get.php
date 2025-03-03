<?php

$result = getActivity();
$resultid = getStudentById($_SESSION['student_id']);
$enrollments = getjoinactivity($_SESSION['student_id']);

renderView('addAdmin_get',[
    'activity' => $result,'result' => $resultid, 'enrollments' => $enrollments
]);
