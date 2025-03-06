<?php
declare(strict_types=1);
$joinactivity = getjoinactivity($_SESSION['student_id']);

renderView('myjoinactivity_get',[ 'join_activity' => $joinactivity]);
?>