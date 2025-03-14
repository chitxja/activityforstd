<?php
if (isset($_SESSION['success'])) {
    echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
    unset($_SESSION['success']);
}?>
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mt-3">
                <h2 class="fw-bold">กิจกรรมของคุณ</h2>
                <a href="addAdmin" class="btn btn-primary px-4 py-2 shadow d-flex align-items-center position-relative">
                    <span class="position-absolute start-0 translate-middle bg-white text-primary rounded-circle d-flex justify-content-center align-items-center"
                        style="width: 40px; height: 40px; border: 2px solid #0d6efd;">
                        <strong style="font-size: 24px;">+</strong>
                    </span>
                    <span class="ms-4">เพิ่มกิจกรรม</span>
                </a>
            </div>
        </div>

        <table class="table border mt-2">
            <thead>
                <tr>
                    <th colspan="6">ชื่อกิจกรรม</th>
                    <th colspan="3">จำนวนนิสิตที่ลงทะเบียน</th>
                    <th colspan="3">จัดการข้อมูล</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $activity = $data['activity'] ?? []; // กำหนดค่าเริ่มต้นให้เป็น array
                $sum = $data['sum_member'] ?? [];
                $sum = getsummember();
                // echo "<pre>";
                // print_r($sum);
                // echo "</pre>";


                if (is_array($activity) && !empty($activity)): ?>
                    <?php foreach ($activity as $a):
                        $total_join = 0; // กำหนดค่าเริ่มต้น

                        if (is_array($sum)) {
                            foreach ($sum as $s) {
                                if ($s['activity_id'] == $a['activity_id']) {
                                    $total_join = $s['total_join'];
                                    break;
                                }
                            }
                        }
                    ?>
                        <tr>
                            <td colspan="6"><?= htmlspecialchars($a['title'] ?? 'ไม่มีชื่อกิจกรรม') ?></td>
                            <td colspan="3"><?= htmlspecialchars((string) $total_join) ?> / <?= $a['member'] ?></td>
                            <td colspan="3"  class="d-flex ">
                            <form action="detailactivity" method="get">
                                    <input type="hidden" name="activity_id" value="<?= $a['activity_id'] ?>">
                                    <input type="submit" class="btn btn-info me-2" value="รายละเอียด">
                                </form>
                                <form action="editActivity" method="get">
                                    <input type="hidden" name="activity_id" value="<?= $a['activity_id'] ?>">
                                    <input type="submit" class="btn btn-warning me-2" value="แก้ไข">
                                </form>
                                <form action="deActivity" method="get">
                                    <input type="hidden" name="activity_id" value="<?= $a['activity_id'] ?>">
                                    <input type="submit" class="btn btn-danger" value="ลบ" onclick="confirmdelactivity();">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="12" class="text-center">ไม่มีข้อมูลกิจกรรม</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    function confirmdelactivity() {
        alert("คุณต้องการลบกิจกรรมใช่หรือไม่");
    }
</script>    

