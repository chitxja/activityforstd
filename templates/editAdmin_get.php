<?php
$act = $data['activity'];
$actid = $act['activity_id'];
?>
<div class="container mt-3 p-4">
    <form action="editadmin_insert" method="POST" enctype="multipart/form-data">
        <div class="card shadow">
            <div class="card-header text-center">
                <h4 class="card-title">แก้ไขข้อมูล</h4>
                <p>โปรดเลือกภาพอย่างน้อย 3 รูป</p>
            </div>

            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <?php if (!empty($act['image'])) { ?>
                            <img id="oldImage" src="<?= $act['image'] ?>" class="rounded img-fluid" alt="Old Image">
                        <?php } ?>
                        <img id="imagePreview" src="" alt="Preview Image" class="rounded img-fluid" style="display: none;">
                        <input type="hidden" name="oldimage" value="<?= $act['image'] ?>">
                        <input type="file" id="image" name="image" accept="image/*" class="form-control mt-2">
                    </div>

                    <div class="col-md-4 text-center">
                        <?php if (!empty($act['image2'])) { ?>
                            <img id="oldImage2" src="<?= $act['image2'] ?>" class="rounded img-fluid" alt="Old Image">
                        <?php } ?>
                        <img id="imagePreview2" src="" alt="Preview Image" class="rounded img-fluid" style="display: none;">
                        <input type="hidden" name="oldimage2" value="<?= $act['image2'] ?>">
                        <input type="file" id="image2" name="image2" accept="image/*" class="form-control mt-2">
                    </div>

                    <div class="col-md-4 text-center">
                        <?php if (!empty($act['image3'])) { ?>
                            <img id="oldImage3" src="<?= $act['image3'] ?>" class="rounded img-fluid" alt="Old Image">
                        <?php } ?>
                        <img id="imagePreview3" src="" alt="Preview Image" class="rounded img-fluid" style="display: none;">
                        <input type="hidden" name="oldimage3" value="<?= $act['image3'] ?>">
                        <input type="file" id="image3" name="image3" accept="image/*" class="form-control mt-2">
                    </div>
                </div>

                <hr>

                <div class="mb-3">
                    <label for="nameAt" class="form-label">ชื่อกิจกรรม</label>
                    <input type="text" class="form-control" name="nameAt" id="nameAt" value="<?= $act['title'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="detialAt" class="form-label">รายละเอียดกิจกรรม</label>
                    <input type="text" class="form-control" name="detialAt" id="detialAt" value="<?= $act['description'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="loAt" class="form-label">สถานที่จัดกิจกรรม</label>
                    <input type="text" class="form-control" name="loAt" id="loAt" value="<?= $act['location'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="dateAt" class="form-label">วันที่เริ่มกิจกรรม</label>
                    <input type="date" class="form-control" name="dateAt" id="dateAt" value="<?= $act['activity_date'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="timeAt" class="form-label">ชั่วโมงกิจกรรม</label>
                    <input type="text" class="form-control" name="timeAt" id="timeAt" value="<?= $act['time'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="enrollAt" class="form-label">คณะที่รับ</label>
                    <input type="text" class="form-control" name="enrollAt" id="enrollAt" value="<?= $act['enrollment'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="memberAt" class="form-label">จำนวนสมาชิก</label>
                    <input type="text" class="form-control" name="memberAt" id="memberAt" value="<?= $act['member'] ?>" required>
                </div>

                <div class="d-flex justify-content-between">
                    <input type="hidden" name="activity_id" value="<?= $actid ?>">
                    <input type="hidden" name="adminid" value="<?= $_SESSION['student_id'] ?>">
                    <input type="submit" name="addActivity" value="บันทึกกิจกรรม" class="btn btn-primary w-30">
                    <a href="/main" class="btn btn-danger w-30">ยกเลิก</a>
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
        const oldImage = document.getElementById(oldImageId);
        const preview = document.getElementById(previewId);

        if (!file) {
            // ถ้าผู้ใช้ยกเลิกการเลือกไฟล์ ให้แสดงภาพเก่าและซ่อนพรีวิว
            if (oldImage) oldImage.style.display = 'block';
            if (preview) {
                preview.src = '';
                preview.style.display = 'none';
            }
            return;
        }

        if (!file.type.startsWith('image/')) {
            alert('กรุณาเลือกไฟล์รูปภาพเท่านั้น!');
            event.target.value = ''; // รีเซ็ต input file
            return;
        }

        const reader = new FileReader();
        reader.onload = function(e) {
            if (oldImage) oldImage.style.display = 'none'; // ซ่อนรูปเก่า
            if (preview) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
        };
        reader.readAsDataURL(file);
    }
</script>
