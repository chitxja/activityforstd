<?php
declare(strict_types=1);
$getstd = getStudentById($_SESSION['student_id']);
renderView('editprofile_get',['getstd' => $getstd]);