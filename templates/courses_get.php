<?php
$activity = $data['activity'];
$dataid = $data['result']['std_id'];
?>
<div class="container">
<h2 class="mt-3">รายวิชาที่เปิดให้ลงทะเบียน</h2>
<table border="1" class="table mt-3">
    <thead>
        <tr>
            <th>ชื่อกิจกรรม</th>
            <th class="text-center">จัดการข้อมูล</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($activity as $a): ?>
            <tr>
            
                <td><?= $a['title'] ?></td>
                <!-- <td><?= $a[''] ?></td>
             s   <td><?= $a['instructor'] ?></td> -->
                <td class="d-flex justify-content-center aling-items-center">
                    <form action="/enroll" method="get" onsubmit="return confirmmisstion()">
                        <input type="hidden" name="student_id" value="<?= $dataid ?>">
                        <input type="hidden" name="course_id" value="<?= $course['course_id'] ?>">
                        <input type="submit" class="btn btn-info text-light " value="ลงทะเบียน">
                    </form>
                    </td>
            </tr>
        <?php endforeach; ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
    </tbody>
</table>
</div>
<script>
    function confirmmisstion(){
        return confirm("คุณต้องการเพิ่มรายวิชาใหม่เข้าระบบใช่ไหม?");
    }
</script>