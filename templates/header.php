<?php
if (isset($_SESSION['student_id'])) {
    $resultid = getStudentById($_SESSION['student_id']);

    if ($resultid) {
        $n = htmlspecialchars($resultid['firstname']);
        $ln = htmlspecialchars($resultid['lastname']);
        $image = !empty($resultid['image']) ? htmlspecialchars($resultid['image']) : 'default-profile.png';
    }
}


?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid  d-flex ">
            <h1>ระบบลงกิจกรรม</h1>
            <ul class="navbar-nav me-3">
                <?php
                if (isset($_SESSION['timestamp'])) {?>
                        <div class="d-flex justify-content-end ">
                            <li class="nav-item d-flex  align-items-center">
                                <a class="nav-link" href="/courses">กิจกรรมทั้งหมด
                                    <span class="badge rounded-pill bg-danger">New</span></a>
                            </li>
                            <li class="nav-item d-flex  align-items-center">
                                <a class="nav-link" href="/admin">
                                    <span>กิจกรรมของคุณ</span>
                                </a>
                            </li>
                            <li class="nav-item d-flex  align-items-center">
                                <a class="nav-link" href="/addAdmin">
                                    <span>เพิ่มกิจกรรม</span>
                                </a>
                            </li>
                        <div class="dropdown  d-flex  ">
                            <a class="navbar-brand d-flex  align-items-center nav-link" href="#" data-bs-toggle="dropdown">
                                <img src="<?= $image ?>" alt="Logo" style="width:40px;" class="rounded-pill align-self-start  ">
                                <?php echo $n . " " . $ln; ?>
                            </a>
                            <ul class="dropdown-menu">
                                    <a class="nav-link" href="/profile">ข้อมูลนักเรียน</a>
                                <a class="nav-link" href="/logout">ออกจากระบบ</a>
                            </ul>
                        </div>
                    <?php
                } else {
                    ?>
                        <li class="nav-item d-flex  align-items-center">
                            <a class="nav-link  " href="/">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">เข้าสู่ระบบ</a>
                        </li>
                    <?php
                }
                    ?>
                        </div>
            </ul>
        </div>
    </nav>