<?php 
$act = $data['activity'];
$actid = $act['activity_id'];
?>
  <div class="row justify-content-center">
            <!-- ส่วนซ้าย: รูปบวก -->
            <div class="col-md-4 d-flex justify-content-center align-items-center mb-4 mb-md-0">
                <div class="border d-flex justify-content-center align-items-center" style="width: 100%; max-width: 350px; height: 350px; position: relative;">
                    <button class="btn btn-outline-primary position-absolute" style="font-size: 68px; width: 100%; height: 100%;" onclick="document.getElementById('fileInput').click();">
                        +
                    </button>
                    <input type="file" id="fileInput" style="display: none;" />
                </div>
            </div>

            <!-- ส่วนขวา: ฟอร์ม -->
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">แก้ไขกิจกรรม</h4>
                        <form action="editAdmin_insert" method="POST">
                            <div class="mb-3">
                                <label for="nameAt" class="form-label">ชื่อกิจกรรม</label>
                                <input type="text" class="form-control" name="nameAt" id="nameAt"  value="<?=  $act['title']?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="detialAt" class="form-label">รายละเอียดกิจกรรม</label>
                                <input type="text" class="form-control" name="detialAt" id="detialAt" value="<?=  $act['description']?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="dateAt" class="form-label">วัน-เวลาเริ่มกิจกรรม</label>
                                <input type="text" class="form-control" name="dateAt" id="dateAt" value="<?=  $act['activity_date']?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="memberAt" class="form-label">จำนวนสมาชิก</label>
                                <input type="text" class="form-control" name="memberAt" id="memberAt" value="<?=  $act['member']?>" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" name="activity_id" value="<?=  $actid?>" class="btn btn-primary w-30">แก้ไขกิจกรรม</button>
                                <a href="/admin" class="btn btn-danger w-30">ยกเลิก</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>


