
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
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

<!-- Content -->
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mt-3">
                <h2 class="fw-bold">กิจกรรมของคุณ</h2>
                <a href="addAdmin.php" class="btn btn-primary px-4 py-2 shadow d-flex align-items-center position-relative">
                    <span class="position-absolute start-0 translate-middle bg-white text-primary rounded-circle d-flex justify-content-center align-items-center" style="width: 40px; height: 40px; border: 2px solid #0d6efd;">
                        <strong style="font-size: 24px;">+</strong>
                    </span>
                    <span class="ms-4">เพิ่มกิจกรรม</span>
                </a>
            </div>
        </div>
    </div>

    
    
</div>

</body>
</html>
