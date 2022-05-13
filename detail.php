<?php
include "koneksi.php";

$id = $_GET['id'];
$ambilData = mysqli_query($koneksi, "SELECT * FROM tb_news WHERE id='$id'");
$data = mysqli_fetch_array($ambilData);
?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/boxicons.min.css">
   <link rel="stylesheet" href="css/style.css">


   <title>Sejarah FTIK</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

   <?php include "navbar.php"; ?>

   <section id="home">
      <div class="container text-center">
         <div class="row justify-content-center">
            <div class="col-md-10">
               <p class="text-white">SELAMAT DATANG DI</p>
               <h1 class="text-white display-5">Fakultas Teknik dan Ilmu Komputer dan Ilmu Komputer</h1>
               <a href="login.php" class="btn btn-brand">Login</a>
            </div>
         </div>
      </div>
   </section>

   <section id="features m-auto">
      <div class="container">
         <div class="row">
            <div class="col-12 section-intro">
               <h1>Detail</h1>
               <div class="hline"></div>
            </div>
         </div>
         <div class="row gy-4">
            <div class="col-lg-12">
               <div class="card" style=" border: 0; box-shadow: 0 5px 10px #efefef;">
                  <div class="card-header">
                     <h4 class="text-center"><?= $data['judul'] ?></h4>

                  </div>
                  <div class="card-body">
                     <p class="lead" align="center">
                        <br>
                        <img src="uploads/<?= $data['foto'] ?>" alt="" style="width: 350px; margin: auto;">
                        <br>
                        <br>
                        <?= $data['deskripsi'] ?>
                     </p>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php include "footer.php"; ?>

</body>

</html>