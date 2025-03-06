<?php
declare(strict_types=1);
$getactivityid = $_GET['activity_id'] ?? '';
$getactivitybyid = getactivitybyid($getactivityid);
renderView('detailactivity_get', ['activity' => $getactivitybyid]);
?>