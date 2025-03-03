<?php
if ($data['result']) {  
    $a = $data['result'];  
    $date = new DateTime($a['activity_date']);  
    $formatted_date = $date->format('d-m-Y');  
} else {
    echo 'ข้อมูลกิจกรรมไม่ถูกต้อง';
    exit;
}
$stdid = $data['stdid']['user_id'];

?>
<div class="text-center">
    <h1>รายการกิจกรรม</h1>
</div>
<div class=" container ">
    <!-- <div class=" d-flex justify-content-center"> -->
        <div class="row">
            <div class="col">
                <img src="<?= $a['image'] ?>" class="rounded w-100" alt="">
            </div>
            <div class="container col ">
                <section class="text-center">
                <h2><strong>โครงการ<?= $a['title'] ?></s    trong></h2>
                </section>
                <section><h5><strong>คำอธิบาย</strong> <?= $a['description']  ?></h5></h5></section>
                <section><h5><strong>วันที่</strong> <?= $a['activity_date'] ?></h5></section>
                <section><h5><strong>สถานที่</strong> <?= $a['location'] ?></h5></section>
                <section><h5><strong>ชั่วโมงกิจกรรม</strong> <?= $a['time'] ?> ชั่วโมง</h5></section>
                <section><h5><strong>รับสมัคร</strong> <?= $a['member'] ?> คน</h5></section>


                <section class="d-flex justify-content-between mb-2 ">
                    <section><h5><strong>สถานะ</strong> <?= $a['status'] ?></h5></section>
                    <form action="joinActivity" method="get">
                        <input name="stdid" type="hidden" value="<?= $stdid ?>">
                        <input name="activity_id" type="hidden" value="<?= $a['activity_id'] ?>">
                        <input class="btn btn-primary " type="submit" value="ลงทะเบียน">
                    </form>
                </section>


            <!-- </div> -->

        </div>

    </div>
</div>