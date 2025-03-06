<?php
$a = $data['activity'];
?>
<div class=" container mt-4">
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
                    <a href="/admin"><button class="btn">กลับ</button></a>
                </section>


            <!-- </div> -->

        </div>

    </div>
</div>