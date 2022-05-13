<?php
include "koneksi.php";
session_start();
if (empty($_SESSION['username'])) {
    echo "<script>alert('Silahkan login terlebih dahulu');
    document.location='login.php'</script>";
}

$id = $_GET['id_slider'];
$ambilData = mysqli_query($koneksi, "SELECT * FROM tb_slider WHERE id='$id'");
$data = mysqli_fetch_array($ambilData);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Slider</title>

    <!-- Custom fonts for this template-->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <!--load all styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "admin_sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "admin_navbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-sm-12 pt-5 text-center m-auto">
                                <div class="card" style="border: 0; border-radius: 20px;">
                                    <div class="card-body">
                                        <h2 style="font-weight: 700;">Edit Brosur</h2>
                                        <p>Silahkan Isi Pada Form Berikut</p>
                                        <br>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="file" value="<?= $data['gambar']; ?>" class="form-control" name="gambar" style="border-radius: 50px;">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <button type="submit" name="edit" class="btn btn-primary" style="width:100%; border-radius: 50px;">Edit</button>
                                            </div>
                                            <br>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    <!--JS-->

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php

    if (isset($_POST['edit'])) {
        $nama_foto = $_FILES['gambar']['name'];
        $sources = $_FILES['gambar']['tmp_name'];
        $folder = 'uploads/';
        move_uploaded_file($sources, $folder . $nama_foto);
        $update = mysqli_query($koneksi, "UPDATE tb_slider SET gambar='$nama_foto' WHERE id='$id'");
        if ($update) {
            echo "<script>alert('Selamat Data Berhasil Tersimpan !');document.location='admin_slider.php'</script>";
        } else {
            echo 'Gagal Upload !';
        }
    }
    ?>

</body>

</html>