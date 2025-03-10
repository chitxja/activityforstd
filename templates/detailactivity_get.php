<?php
$a = $data['activity'];
?>
<div class=" container mt-4 w-50">
<div id="demo" class="carousel slide" data-bs-ride="carousel">
        <?php
        // นับจำนวนภาพที่มีอยู่จริง
        $imageCount = 0;
        if (!empty($a['image'])) $imageCount++;
        if (!empty($a['image2'])) $imageCount++;
        if (!empty($a['image3'])) $imageCount++;
        ?>

        <!-- Indicators/dots -->
        <?php if ($imageCount > 1): ?>
            <div class="carousel-indicators">
                <?php for ($i = 0; $i < $imageCount; $i++): ?>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>"></button>
                <?php endfor; ?>
            </div>
        <?php endif; ?>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <?php
            $firstImageDisplayed = false;

            if (!empty($a['image'])): ?>
                <div class="carousel-item active">
                    <img src="<?= $a['image'] ?>" alt="image1" class="d-block w-100">
                </div>
                <?php $firstImageDisplayed = true; ?>
            <?php endif; ?>

            <?php if (!empty($a['image2'])): ?>
                <div class="carousel-item <?= !$firstImageDisplayed ? 'active' : '' ?>">
                    <img src="<?= $a['image2'] ?>" alt="image2" class="d-block w-100">
                </div>
                <?php $firstImageDisplayed = true; ?>
            <?php endif; ?>

            <?php if (!empty($a['image3'])): ?>
                <div class="carousel-item <?= !$firstImageDisplayed ? 'active' : '' ?>">
                    <img src="<?= $a['image3'] ?>" alt="image3" class="d-block w-100">
                </div>
            <?php endif; ?>
        </div>

        <!-- Left and right controls/icons (แสดงเฉพาะถ้ามีมากกว่า 1 ภาพ) -->
        <?php if ($imageCount > 1): ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        <?php endif; ?>
    </div>
        <!-- <div class="row">
            <div class="col">
                <img src="<?= $a['image'] ?>" class="rounded w-100" alt="">
            </div> -->
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
                    <a href="/admin"><button class="btn btn-danger">กลับ</button></a>
                </section>


            <!-- </div> -->

        </div>

    </div>
</div>
