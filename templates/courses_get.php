<div class="text-center">
    <h1>รายการกิจกรรม</h1>
</div>
<div class="d-flex justify-content-center">
    <div class="row container">
        <?php
        foreach ($data['activity'] as $a) {

            if ($a['status'] === "ปิดรับแล้ว") {
                continue; 
            }

            $date = new DateTime($a['activity_date']);
            $formatted_date = $date->format('d-m-Y'); ?>
            <section class="col-4 mb-1 ">
                <div class="border  rounded-4 overflow-hidden ">
                    <section>
                        <img src="<?= $a['image'] ?>" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                    </section>
                    <div class="container">
                        <section class="text-center">
                            <strong>โครงการ<?= $a['title'] ?></strong>
                        </section>
                        <section><strong>วันที่ </strong><?= $formatted_date  ?></section>
                        <section><strong>สถานที่ </strong><?= $a['location'] ?></section>
                        <section><strong>ชั่วโมงกิจกรรม</strong> <?= $a['time'] ?> ชั่วโมง</section>
                        <section><strong>รับสมัคร</strong> <?= $a['enrollment'] ?></section>
                        <div class="d-flex justify-content-between mb-3">
                            <section class=" text-center mt-2"><strong><?= $a['status'] ?></strong></section>
                            <section class="">
                                <form action="activity" method="get">
                                    <input name="activity_id" type="hidden" value="<?= $a['activity_id'] ?>">
                                    <input class="btn btn-primary " type="submit" value="รายละเอียด">
                                </form>
                            </section>

                        </div>
                    </div>

            </section>
        <?php } ?>
    </div>
</div>
</div>





