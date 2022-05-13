<?php
include "koneksi.php";
if (empty($_SESSION['username'])) {
    echo "<script>alert('Silahkan login terlebih dahulu');
    document.location='login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Dashboard</title>
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-smile"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin FTIK</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fa fa-home"></i>
                    <span>Beranda</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Direktori
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="news.php">
                    <i class="fa fa-newspaper"></i>
                    <span>Berita Terbaru</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="pejabat.php">
                    <i class="fa fa-user"></i>
                    <span>Pejabat FTIK</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="kritiksaran.php">
                    <i class="fa fa-comment"></i>
                    <span>Kritik & Saran</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="pengaturan.php">
                    <i class="fa fa-wrench"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                SPMB Online
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_pmb.php">
                    <i class="fa fa-graduation-cap"></i>
                    <span>PMB Online</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="biaya_pendidikan.php">
                    <i class="fa fa-dollar"></i>
                    <span>Biaya Pendidikan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_brosur.php">
                    <i class="fa fa-picture-o "></i>
                    <span>Brosur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_slider.php">
                    <i class="fa fa-picture-o "></i>
                    <span>Slider</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item text-center">
                <a href="logout.php"><button class="btn btn-danger" style="border-radius: 50px; width: 90%;"><i class="fa fa-sign-out mr-2"></i>Keluar</button></a>
            </li>
        </ul>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>