<?php
declare(strict_types=1);

if (!isset($_GET['stdid']) || !isset($_GET['activity_id'])) {
    header('Location: /activity');
    exit();
} else {
    $stdid = (int)$_GET['stdid'];
    $activity_id = (int)$_GET['activity_id'];
    $result = dropjoinactivitystd($stdid , $activity_id);
    if ($result) {
        header('Location: /profile');
    } else {
        header('Location: /profile');
        exit();
    }
}