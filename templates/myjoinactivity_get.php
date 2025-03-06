<?php
$myjoinactivity = $data['join_activity'];
?>
<div class="container mt-2">
        <h2 class="text-center mb-2">กิจกรรมที่คุณลงทะเบียนไว้</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="">
                    <tr>
                        <th>ชื่อกิจกรรม</th>
                        <th>การจัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($myjoinactivity as $join):?>
                    <tr>
                        <td><?= $join['title']?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>

    </div>
    
</div>

</body>
</html>
