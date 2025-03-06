<div class="container mt-4 p-4">
    <form action="addAdmin_insert" method="POST" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <!-- <div class="col-md-4 d-flex justify-content-center align-items-center mb-4 mb-md-0"> -->
                <!-- <div class="border d-flex justify-content-center align-items-center" style="width: 100%; max-width: 350px; height: 350px; position: relative;"> -->
                    <!-- <img id="previewImage" src="default-image.jpg" alt="Preview" style="width: 100%; height: 100%; object-fit: cover; display: none;"> -->
                    <!-- <button type="button" class="btn btn-outline-primary position-absolute" style="font-size: 68px; width: 100%; height: 100%;" onclick="document.getElementById('fileInput').click();"> -->
                        <!-- + -->
                    <!-- </button> -->
                <!-- </div> -->
            <!-- </div> -->
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <input type="hidden" name="oldimage"  >
                        <input type="file" id="image" name="image" accept="image/*"  >
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