<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow ">
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

    <div class="container mt-4 p-4">
        <form action="addAdmin_insert.php" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <!-- ส่วนซ้าย: อัปโหลดรูปภาพ -->
                <div class="col-md-4 d-flex justify-content-center align-items-center mb-4 mb-md-0">
                    <div class="border d-flex justify-content-center align-items-center" style="width: 100%; max-width: 350px; height: 350px; position: relative;">
                        <img id="previewImage" src="default-image.jpg" alt="Preview" style="width: 100%; height: 100%; object-fit: cover; display: none;">
                        <button type="button" class="btn btn-outline-primary position-absolute" style="font-size: 68px; width: 100%; height: 100%;" onclick="document.getElementById('fileInput').click();">
                            +
                        </button>
                        <input type="file" name="file" id="fileInput" style="display: none;" accept="image/*" onchange="previewFile()">
                    </div>
                </div>

                <!-- ส่วนขวา: ฟอร์ม -->
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
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
                                <button type="submit" class="btn btn-primary w-30">บันทึกกิจกรรม</button>
                                <a href="indexAdmin.php" class="btn btn-danger w-30">ยกเลิก</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>