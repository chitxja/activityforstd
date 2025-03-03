<?php
declare(strict_types=1);
$activity = getAdminCreateActivitybyid($_SESSION['student_id']);
$std_join = getjoinactivity($_SESSION['student_id']);
renderView('admin_get',['activity' => $activity , 'join_activity' => $std_join]);