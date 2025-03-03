
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLNAME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">
            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="30" height="30" class="d-inline-block align-text-top">
            Activity4for
        </a>
        <div class="d-flex align-items-center">
            <a href="indexAdmin.php" class="nav-link text-white me-3 fw-semibold">Home</a>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVq1bwRuyauKrteZeEBfT9Q9ZyKLI1udwCig&s" alt="profile" class="rounded-circle border border-light me-2" width="35" height="35">
                    <span class="fw-semibold">Admin Name</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li><a class="dropdown-item" href="#">Log out</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
        <h2 class="text-center mb-4">รายชื่อนิสิตทั้งหมด</h2>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="">
                    <tr>
                        <!-- เราไม่รู้ว่าต้องมีอะไรบ้างลองเพิ่มลดดูนะ -->
                        <th>ID</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>วันเกิด</th>
                        <th>การจัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- ใช้ PHP เพื่อดึงข้อมูลจากฐานข้อมูลที่นี่ ต้องมีสถานะ อนุมัติแล้ว กับ ไม่อนุมัติ-->
                    
                </tbody>
            </table>
        </div>

    </div>
    
</div>

</body>
</html>