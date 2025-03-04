<?php
declare(strict_types=1);
if (!isset($_GET['activity_id'])) {
    header('Location: /activity');  
    exit();
} else {
    $activity_id = (int)$_GET['activity_id'];
    $activity = getActivityById($activity_id);

        renderView('editAdmin_get', ['activity' => $activity]);
}
?> 