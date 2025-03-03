<?php
if ($data['result']) {  // Check if $res is not null
    $a = $data['result'];  // Save the result to $a for easier access
    $date = new DateTime($a['activity_date']);  // Convert the date to DateTime
    $formatted_date = $date->format('d-m-Y');  // Format the date
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
    <div class=" d-flex justify-content-center">
        <img src="<?= $a['image'] ?>" class="rounded w-50" alt="">
                <div class="container">
                    <section class="text-center">
                        <strong>โครงการ<?= $a['title'] ?></strong>
                    </section>
                    <section>วันที่ <?= $a['activity_date']  ?></section>
                    <section>สถานที่</section>
                    <section>ชั่วโมงกิจกรรม</section>
                    <section>รับสมัคร</section>


                    <section class="d-flex justify-content-between mb-2 ">
                        <section>สถานะ <?= $a['status'] ?></section>
                        <form action="joinActivity" method="get">
                            <input name="stdid" type="hidden" value="<?= $stdid ?>">
                            <input name="activity_id" type="hidden" value="<?= $a['activity_id'] ?>">
                            <input class="btn btn-primary " type="submit" value="ลงทะเบียน">
                        </form>
                    </section>


    

            </div>

    </div>
</div>