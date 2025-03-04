<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">

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

    <div class="container p-4">
        <div class="row d-flex justify-content-center">
            
            <div class="col-md-6">
                <div class="card">
                    <div class="d-flex justify-content-center">
                        
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyD-461keXKrLe2hEQh2rp7owl1Iq8tbpuBg&s" class="card-img-top" alt="Image" style="max-width: 500px; max-height: 400px; object-fit: contain;">
                    </div>
                    <div class="card-body">
                        
                        <h5 class="card-title mb-3">ชื่อกิจกรรม: กิจกรรมตัวอย่าง</h5>
                        <p class="card-text mb-3"><strong>รายละเอียดกิจกรรม:</strong> กิจกรรมนี้จัดขึ้นเพื่อส่งเสริมการเรียนรู้ด้านเทคโนโลยี และสร้างเครือข่ายระหว่างนักเรียนและผู้เชี่ยวชาญ.</p>
                        <p class="card-text mb-3"><strong>วันที่จัดกิจกรรม:</strong> 25 มีนาคม 2025</p>
                        <p class="card-text mb-3"><strong>จำนวนสมาชิก:</strong> 150 คน</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="d-flex flex-column">
                    <a href="allname.php" class="btn btn-primary mb-3">ผู้เข้าร่วมกิจกรรมทั้งหมด</a>
                    <a href="atmit.php" class="btn btn-primary mb-3">อนุมัติกิจกรรมทั้งหมด</a>
                    <a href="req.php" class="btn btn-primary mb-3">คำขอเข้าร่วมกิจกรรม</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
