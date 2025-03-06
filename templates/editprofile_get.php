<?php
$act = $data['getstd'];
$actid = $act['user_id'];
?>
<form action="editprofile" method="POST" class="mt-2 container" enctype="multipart/form-data">

    <div class="card-body">
        <div class="card shadow">
            <div class="row justify-content-center">
                <div class="col-md-4 d-flex justify-content-center align-items-center mb-4 mb-md-0">
                    <div class=" d-flex  justify-content-center align-items-center flex-column  " style="width: 100%; max-width: 350px; height: 350px; position: relative;">
                        <?php
                        if (!empty($act['image'])) { ?>
                            <img id="oldImage" src="<?= $act['image'] ?>" class="rounded w-100"  alt="Old Image">
                        <?php } ?>

                        <img id="imagePreview" src="" alt="Preview Image" class="rounded w-100" style="display: none;">

                        <div class="d-flex justify-content-center mt-3">
                            <input type="hidden" name="oldimage" value="<?= $act['image'] ?>">
                            <input type="file" id="image" name="image" accept="image/*" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="mt-3 mb-3">
                        <h4 class="card-title text-center mb-4">แก้ไขข้อมูล</h4>
                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" name="name" value="<?= $act['firstname'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="ln" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" name="lastname" value="<?= $act['lastname'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">อีเมล</label>
                            <input type="text" class="form-control" name="email" value="<?= $act['email'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">สถานะ</label>
                            <input type="text" class="form-control" name="role" value="<?= $act['role'] ?>" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" name="stdid" value="<?= $actid ?>" class="btn btn-primary w-30">แก้ไขข้อมูล</button>
                            <a href="/profile" class="btn btn-danger w-30">ยกเลิก</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const file = event.target.files[0]; // ดึงไฟล์ที่เลือก
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // ซ่อนภาพเก่าทันที
                const oldImage = document.getElementById('oldImage');
                if (oldImage) {
                    oldImage.style.display = 'none';
                }

                // แสดงภาพใหม่
                const preview = document.getElementById('imagePreview');
                preview.src = e.target.result;
                preview.style.display = 'block'; // แสดงภาพใหม่
            };
            reader.readAsDataURL(file);
        }
    });
</script>