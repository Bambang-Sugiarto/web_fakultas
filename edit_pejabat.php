<?php
include "koneksi.php";
session_start();
if (empty($_SESSION['username'])) {
    echo "<script>alert('Silahkan login terlebih dahulu');
    document.location='login.php'</script>";
}
$id = $_GET['id'];
$ambilData = mysqli_query($koneksi, "SELECT * FROM tb_pejabat WHERE id='$id'");
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

    <title>Admin - Edit Pejabat</title>

    <!-- Custom fonts for this template-->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/all.css" rel="stylesheet">
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
                                        <h2 style="font-weight: 700;">Edit Pejabat</h2>
                                        <p>Silahkan Isi Pada Form Berikut</p>
                                        <br>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control" placeholder="Nama dan gelar" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" value="<?= $data['nipy']; ?>" name="nipy" class="form-control" placeholder="NIPY" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="nidn" value="<?= $data['nidn']; ?>" class="form-control" placeholder="NIDN" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">
                                                <select name="jabatan" class="form-select" aria-label="Default select example" style="border-radius: 50px;">
                                                    <option value="<?= $data['jabatan']; ?>"><?= $data['jabatan']; ?></option>
                                                    <option value="Dekan">Dekan</option>
                                                    <option value="Wakil Dekan 1">Wakil Dekan 1</option>
                                                    <option value="Wakil Dekan 2">Wakil Dekan 2</option>
                                                    <option value="Wakil Dekan 3">Wakil Dekan 3</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="foto" style="border-radius: 50px;">
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
            <footer class="sticky-footer bg-white mt-5">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; FTIK UPS 2021 - <?= date('Y') ?></span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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
        $nama = $_POST['nama'];
        $nipy = $_POST['nipy'];
        $nidn = $_POST['nidn'];
        $jabatan = $_POST['jabatan'];
        $nama_foto = $_FILES['foto']['name'];
        $sources = $_FILES['foto']['tmp_name'];
        $folder = 'uploads/';

        if ($sources != "") {
            move_uploaded_file($sources, $folder . $nama_foto);
            $update = mysqli_query($koneksi, "UPDATE tb_pejabat SET
            nama='$nama',
            nipy='$nipy',
            nidn='$nidn',
            jabatan='$jabatan',
            foto='$nama_foto'
            WHERE id='$id'
            ");

            if ($update) {
                echo "<script>alert('Selamat Data Berhasil Tersimpan !');document.location='pejabat.php'</script>";
            } else {
                echo 'Gagal Upload !';
            }
        } else {
            $update = mysqli_query($koneksi, "UPDATE tb_pejabat SET
            nama='$nama',
            nipy='$nipy',
            nidn='$nidn',
            jabatan='$jabatan'
            WHERE id='$id'
            ");

            if ($update) {
                echo "<script>alert('Selamat Data Berhasil Tersimpan !');document.location='pejabat.php'</script>";
            } else {
                echo 'Gagal Upload !';
            }
        }
    }
    ?>
</body>

</html>