<?php 
if (!isset($_SESSION['student_id'])) {
    header('Location: /');
    exit();
}else {?>
<section class="container">
    <h2 class="mt-3 mb-3">ข้อมูลนักเรียน</h2>
    <div class="row ">
        <div class="border rounded-4 row d-flex justify-content-center container ">
            <div class="col-3 mt-3 mb-3 me-3">
                <div class="d-flex justify-content-center ">
                    <img class="rounded w-100"  src="<?= $data['result']['image'] ?>" alt="">
                </div>
            </div>
            <div class="col-7 mt-3 mb-3 ">
                <table border="1" class="table">
                    <tr>
                        <th>ชื่อ</th>
                        <td><?= $data['result']['first_name'] ?></td>
                    </tr>
                    <tr>
                        <th>นามสกุล</th>
                        <td><?= $data['result']['lastname'] ?></td>
                    </tr>
                    <tr>
                        <th>อีเมล</th>
                        <td><?= $data['result']['email'] ?></td>
                    </tr>
                    <tr>
                        <th>สถานะ</th>
                        <td><?= $data['result']['role'] ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <h2 class="mt-3 mb-3">กิจกรรมที่ลงทะเบียนแล้ว</h2>
        <table border="1" class="table">
            <thead>
                <tr>
                    <th>ชื่อกิจกรรม</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $stdid = $data['result']['user_id'];
                $result =$data['join_activity'] ;
                $lenght = $result->num_rows;
                if ($lenght <= 0) {?>
                    <tr>
                    <td colspan="7" class="text-center text-danger">ยังไม่ได้ลงทะเบียน</td>
                    </tr>                    
                <?php }else {
                    foreach ($result as $a): ?>
                        <tr>
                            <td><?= $a['title'] ?></td>
                        </tr>                    
                        <?php endforeach;  
                }?>


            </tbody>
        </table>
    </div>
</section>
            <?php } ?>