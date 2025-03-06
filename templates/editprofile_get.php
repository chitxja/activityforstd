<?php
$act = $data['getstd'];
$actid = $act['user_id'];
?>
<form action="editprofile" method="POST" enctype="multipart/form-data" >
  <div class="row justify-content-center">
            <!-- ส่วนซ้าย: รูปบวก -->
            <div class="col-md-4 d-flex justify-content-center align-items-center mb-4 mb-md-0">
                <div class=" d-flex  justify-content-center align-items-center flex-column " style="width: 100%; max-width: 350px; height: 350px; position: relative;">
                    <!-- <button class="btn btn-outline-primary position-absolute" style="font-size: 68px; width: 100%; height: 100%;" onclick="document.getElementById('fileInput').click();"> -->
                        <!-- + -->
                    <!-- </button> -->
                    <?php echo "<img src='" . $act['image'] . "' height=250 alt=''>";?>
                    <input type="hidden" name="oldimage" value="<?= $act['image'] ?>">
                    <input type="file" id="image" name="image" accept="image/*"  >
                </div>
            </div>

            <!-- ส่วนขวา: ฟอร์ม -->
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">แก้ไขข้อมูล</h4>
                            <div class="mb-3">
                                <label for="name" class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" name="name"   value="<?=  $act['firstname']?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="ln" class="form-label">นามสกุล</label>
                                <input type="text" class="form-control" name="lastname" value="<?=  $act['lastname']?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">อีเมล</label>
                                <input type="text" class="form-control" name="email" value="<?=  $act['email']?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">สถานะ</label>
                                <input type="text" class="form-control" name="role" value="<?=  $act['role']?>" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" name="stdid" value="<?=  $actid?>" class="btn btn-primary w-30">แก้ไขข้อมูล</button>
                                <a href="/profile" class="btn btn-danger w-30">ยกเลิก</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


