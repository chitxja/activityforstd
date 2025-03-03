<?php
declare(strict_types=1);
if (!isset($_GET['course_id']) || !isset($_GET['student_id'])) {
    header('Location: /profile');
    exit;
}else {
    $id = (int)$_GET['student_id'];  
    $coursesid = (int)$_GET['course_id']; 
    $result = dropCourse($id, $coursesid);
    
    if ($result) {
        header('Location: /profile');
    }else {
        
        header('Location: /profile');

    }
}
?>