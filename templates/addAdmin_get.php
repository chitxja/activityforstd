<div class="container mt-4 p-4">
    <form action="addAdmin_insert" method="POST" enctype="multipart/form-data">
        <div class="card shadow">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-4 d-flex justify-content-center align-items-center mb-4 mb-md-0">
                        <div class=" d-flex  justify-content-center align-items-center flex-column  " style="width: 100%; max-width: 350px; height: 350px; position: relative;">
                            <?php
                            if (!empty($act['image'])) { ?>
                                <img id="oldImage" src="<?= $act['image'] ?>" class="rounded w-100" alt="Old Image">
                            <?php } ?>

                            <img id="imagePreview" src="" alt="Preview Image" class="rounded w-100" style="display: none;">

                            <div class="d-flex justify-content-center mt-3">
                                <input type="hidden" name="oldimage" value="<?= $act['image'] ?>">
                                <input type="file" id="image" name="image" accept="image/*" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 col-md-6">
                        <h1><?php $_SESSION['error'] = 'เคยสร้างกิจกรมนี้แล้ว';
                            unset($_SESSION['error']);
                            ?></h1>
                        <h4 class="card-title text-center mb-4">สร้างกิจกรรมใหม่</h4>
                        <div class="mb-3">
                            <label for="nameAt" class="form-label">ชื่อกิจกรรม</label>
                            <input type="text" class="form-control" name="nameAt" id="nameAt" required>
                        </div>
                        <div class="mb-3">
                            <label for="detialAt" class="form-label">รายละเอียดกิจกรรม</label>
                            <input type="text" class="form-control" name="detialAt" id="detialAt" required>
                        </div>
                        <div class="mb-3">
                            <label for="dateAt" class="form-label">วัน-เวลาเริ่มกิจกรรม</label>
                            <input type="date" class="form-control" name="dateAt" id="dateAt" required>
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
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
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