<?php
declare(strict_types=1);
$activity = getAdminCreateActivitybyid($_SESSION['student_id']);
$std_join = getjoinactivity($_SESSION['student_id']);
$join = getsummember();
renderView('admin_get',['activity' => $activity , 'join_activity' => $std_join ,'summember' => $join]);