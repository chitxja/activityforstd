<?php

if (isset($_SESSION['error'])) {
    echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
    unset($_SESSION['error']); // ลบข้อความหลังแสดง
}


?>
<div class="container mt-3 p-4">
    <form action="addadmin_insert" method="POST" enctype="multipart/form-data">
        <div class="card shadow">
            <div class="card-header text-center">
                <h4 class="card-title  ">สร้างกิจกรรมใหม่</h4>
                <p>โปรดเลือกภาพอย่างน้อย 3 รูป</p>

            </div>

            <div class="card-body">
                <div class=" justify-content-center">
                    
                    <!-- <div class="col-md-4 d-flex justify-content-center align-items-center mb-4 mb-md-0"> -->
                    <!-- <div class=" d-flex  justify-content-center align-items-center  " style="width: 100%; max-width: 350px; height: 350px; position: relative;"> -->
                    <?php
                    if (!empty($act['image'])) { ?>
                        <img id="oldImage" src="<?= $act['image'] ?>" class="rounded w-100" alt="Old Image">
                    <?php }
                    if (!empty($act['image2'])) { ?>
                        <img id="oldImage2" src="<?= $act['image2'] ?>" class="rounded w-100" alt="Old Image">
                    <?php }
                    if (!empty($act['image3'])) { ?>
                        <img id="oldImage3" src="<?= $act['image3'] ?>" class="rounded w-100" alt="Old Image">
                    <?php } ?>
                    <div class="row d-flex justify-content-center mt-3">
                        <div class="col">
                            <img id="imagePreview" src="" alt="Preview Image" class="rounded w-100" style="display: none;">

                            <div class="d-flex justify-content-center mt-3">
                                <input type="hidden" name="oldimage" value="<?= $act['image'] ?>">
                                <input type="file" id="image" name="image" accept="image/*" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <img id="imagePreview2" src="" alt="Preview Image" class="rounded w-100" style="display: none;">
                            <div class="d-flex justify-content-center mt-3">
                                <input type="hidden" name="oldimage2" value="<?= $act['image2'] ?>">
                                <input type="file" id="image2" name="image2" accept="image/*" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <img id="imagePreview3" src="" alt="Preview Image" class="rounded w-100" style="display: none;">
                            <div class="d-flex justify-content-center mt-3">
                                <input type="hidden" name="oldimage3" value="<?= $act['image3'] ?>">
                                <input type="file" id="image3" name="image3" accept="image/*" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="mt-3 mb-3 col-md-6"> -->
                <h1><?php $_SESSION['error'] = 'เคยสร้างกิจกรมนี้แล้ว';
                    unset($_SESSION['error']);
                    ?></h1>
                <div class="mb-3">
                    <label for="nameAt" class="form-label">ชื่อกิจกรรม</label>
                    <input type="text" class="form-control" name="nameAt" id="nameAt" required>
                </div>
                <div class="mb-3">
                    <label for="detialAt" class="form-label">รายละเอียดกิจกรรม</label>
                    <input type="text" class="form-control" name="detialAt" id="detialAt" required>
                </div>
                <div class="mb-3">
                    <label for="loAt" class="form-label">สถานที่จัดกิจกรรม</label>
                    <input type="text" class="form-control" name="loAt" id="loAt" required>
                </div>
                <div class="mb-3">
                    <label for="dateAt" class="form-label">วันที่เริ่มกิจกรรม</label>
                    <input type="date" class="form-control" name="dateAt" id="dateAt" required>
                </div>
                <div class="mb-3">
                    <label for="timeAt" class="form-label">ชั่วโมงกิจกรรม</label>
                    <input type="text" class="form-control" name="timeAt" id="timeAt" required>
                </div>
                <div class="mb-3">
                    <label for="memberAt" class="form-label">จำนวนสมาชิก</label>
                    <input type="text" class="form-control" name="memberAt" id="memberAt" required>
                </div>
                <div class="d-flex justify-content-between">
                    <input type="hidden" name="adminid" value="<?= $_SESSION['student_id'] ?>" class="btn btn-primary w-30">
                    <input type="submit" name="addActivity" value="บันทึกกิจกรรม" class="btn btn-primary w-30">
                    <a href="/main" class="btn btn-danger w-30">ยกเลิก</a>
                </div>
                <!-- </div> -->
            </div>
        </div>
        

</div>
</form>
</div>
<script>
    document.getElementById('image').addEventListener('change', function(event) {
        previewImage(event, 'oldImage', 'imagePreview');
    });

    document.getElementById('image2').addEventListener('change', function(event) {
        previewImage(event, 'oldImage2', 'imagePreview2');
    });

    document.getElementById('image3').addEventListener('change', function(event) {
        previewImage(event, 'oldImage3', 'imagePreview3');
    });

    function previewImage(event, oldImageId, previewId) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const oldImage = document.getElementById(oldImageId);
                if (oldImage) {
                    oldImage.style.display = 'none';
                }
                const preview = document.getElementById(previewId);
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    }
</script>