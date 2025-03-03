<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mt-3">
                <h2 class="fw-bold">กิจกรรมของคุณ</h2>
                <a href="addAdmin" class="btn btn-primary px-4 py-2 shadow d-flex align-items-center position-relative">
                    <span class="position-absolute start-0 translate-middle bg-white text-primary rounded-circle d-flex justify-content-center align-items-center" style="width: 40px; height: 40px; border: 2px solid #0d6efd;">
                        <strong style="font-size: 24px;">+</strong>
                    </span>
                    <span class="ms-4">เพิ่มกิจกรรม</span>
                </a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ชื่อกิจกรรม</th>
                    <th>จำนวนนิสิตที่ลงทะเบียน</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                
                <?php 
                $activity = $data['activity'];
                if (is_array($activity)): ?>
                    <?php foreach ($activity as $act): ?>
                        <tr>
                            <td><?= htmlspecialchars($act['title'] ?? 'ไม่มีชื่อกิจกรรม') ?></td>
                            <td><?= htmlspecialchars($act['registered_students'] ?? '0') ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2">ไม่มีข้อมูลกิจกรรม</td>
                    </tr>
                <?php endif; ?>
            </tbody>

            </tbody>
        </table>
    </div>
</div>