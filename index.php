<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Beranda FTIK</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

   <?php include "navbar.php"; ?>
   <div class="slider" style="background-position: center; background-repeat: no-repeat; background-size: contain;">
      <?php
      include "koneksi.php";
      $query = "SELECT * FROM tb_slider";
      $query_run = mysqli_query($koneksi, $query);
      while ($row = mysqli_fetch_array($query_run)) {
      ?>
         <div style="height: 550px; width: 100%;">
            <img src="uploads/<?= $row['gambar']; ?>" alt="...">
         </div>
      <?php
      }
      ?>
   </div>
   <section id="services">
      <div class="container">
         <div class="row">
            <div class="col-12 section-intro">
               <h1>Berita Terbaru</h1>
               <div class="hline"></div>
            </div>
         </div>
         <div class="geser" style="display:block;
               border: 0;
               padding:5px;
               margin: auto;
               margin-top:5px;
               width:100%;
               height:500px;
               overflow:auto;">
            <div class="row">
               <?php
               include "koneksi.php";
               $query = "SELECT * FROM tb_news ORDER BY id DESC";
               $query_run = mysqli_query($koneksi, $query);
               while ($row = mysqli_fetch_array($query_run)) {
               ?>
                  <div class="col-lg-4 col-sm-6 p-4">
                     <p>By: Admin FTIK || <?= date('d M Y', strtotime($row['waktu'])) ?></p>
                     <div class="gambar">
                        <img src="uploads/<?= $row['foto']; ?>" alt="" style="width: 330px; height: 250px;">
                     </div>
                     <h4 class="title-sm mt-4" style="color: blue;"><?= $row['judul']; ?></h4>
                     <p><?= $row['deskripsi']; ?></p>
                     <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-primary">Detail</a>
                  </div>
               <?php
               }
               ?>
            </div>
         </div>

      </div>
   </section>

   <section id="portfolio" class="row g-0 py-0">
      <div class="row">
         <div class="col-12 section-intro">
            <h1>Informasi</h1>
            <div class="hline"></div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6">
         <div class="portfolio-item">
            <img src="img/it.jpg" alt="" style="height: 300px;">
            <div class="portfolio-overlay">
               <div>
                  <h3>Ruang Lab Komputer</h3>
                  <h6>Informatika</h6>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6">
         <div class="portfolio-item">
            <img src="img/cnc.jpg" alt="" style="height: 300px;">
            <div class="portfolio-overlay">
               <div>
                  <h3>Ruang CNC</h3>
                  <h6>Teknik Mesin</h6>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6">
         <div class="portfolio-item">
            <img src="img/perpustakaan.jpg" alt="" style="height: 300px;">
            <div class="portfolio-overlay">
               <div>
                  <h3>Perpustakaan</h3>
                  <h6>FTIK</h6>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6">
         <div class="portfolio-item">
            <img src="img/tu.jpg" alt="" style="height: 300px;">
            <div class="portfolio-overlay">
               <div>
                  <h3>Ruang TU</h3>
                  <h6>TU FTIK UPS</h6>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6">
         <div class="portfolio-item">
            <img src="img/prosesproduksi.jpg" alt="" style="height: 300px;">
            <div class="portfolio-overlay">
               <div>
                  <h3>Laboratorium </h3>
                  <h6>Proses Produksi</h6>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-sm-6">
         <div class="portfolio-item">
            <img src="img/otomotif.jpg" alt="" style="height: 300px;">
            <div class="portfolio-overlay">
               <div>
                  <h3>Laboratorium</h3>
                  <h6>Otomotif</h6>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="features">
      <div class="container">
         <div class="row gy-4">
            <div class="col-lg-4 col-sm-6 feature d-flex">
               <div class="icon-box me-3">
                  <i class="bx bx-check"></i>
               </div>
               <div>
                  <h5 class="title-sm">Program Studi</h5>
                  <p>Jumlah program studi Fakultas Teknik dan Ilmu Komputer adalah
                  <h1>5</h1>
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 feature d-flex">
               <div class="icon-box me-3">
                  <i class="bx bx-check"></i>
               </div>
               <div>
                  <h5 class="title-sm">Sejarah</h5>
                  <p>Fakultas Teknik dan Ilmu Komputer berdiri sejak tahun
                  <h1> 1980</h1>
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 feature d-flex">
               <div class="icon-box me-3">
                  <i class="bx bx-check"></i>
               </div>
               <div>
                  <h5 class="title-sm">Tenaga Pendidik</h5>
                  <p>Jumlah tenaga pendidik di lingkungan Fakultas Teknik dan Ilmu Komputer lebih dari
                  <h1>+25</h1>
                  </p>
               </div>
            </div>

         </div>
      </div>
   </section>

   <div class="row">
      <div class="col-12 section-intro">
         <h1>Pejabat FTIK</h1>
         <div class="hline"></div>
      </div>
   </div>
   <section id="team" class="row g-0 py-0 text-center">
      <?php
      include "koneksi.php";
      $query = "SELECT * FROM tb_pejabat";
      $query_run = mysqli_query($koneksi, $query);
      while ($row = mysqli_fetch_array($query_run)) {
      ?>
         <div class="col-lg-3 col-sm-6 team-member">
            <div class="team-member-img">
               <img src="uploads/<?= $row['foto']; ?>" alt="" style="width: 350px; height: 250px;">
               <div class="social-icons">
                  <h5 class="title-sm mt-3 mb-0 text-white"><?= $row['jabatan']; ?></h5>
               </div>
            </div>
            <div class="p-4">
               <h5 class="title-sm mt-3 mb-0 text-white"><?= $row['nama']; ?></h5>
               <div class="hline"></div>
               <p class="text-white">NIPY. <?= $row['nipy']; ?> </p>
               <p class="text-white">NIDN. <?= $row['nidn']; ?></p>
            </div>
         </div>
      <?php
      }
      ?>
   </section>

   <section id="testimonials" class="text-center">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                     <div class="review">
                        <div class="stars">
                           <i class="bx bxs-star"></i>
                           <i class="bx bxs-star"></i>
                           <i class="bx bxs-star"></i>
                           <i class="bx bxs-star"></i>
                           <i class="bx bxs  -star"></i>
                        </div>
                        <p class="lead">Selamat datang di website Fakultas Teknik dan Ilmu Komputer (FTIK). Segala informasi akademik di lingkungan FTIK akan selalu kami update di website ini. Terimakasih</p>
                        <h5 class="title-sm mb-0">Admin FTIK</h5>
                        <small>0878-3536-1000</small>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="clients" class="bg-light">
      <div class="container">
         <div class="row gy-4">
            <div class="col-lg-4">
               <a href="https://www.facebook.com/fakultas.teknik.5076"><img src="img/logo1.svg" alt=""></a>
            </div>
            <div class="col-lg-4">
               <a href="https://www.youtube.com/channel/UCc4rq_a8weh-R1scjLMo8bg/featured"><img src="img/logo3.svg" alt=""></a>
            </div>
            <div class="col-lg-4">
               <a href="https://www.instagram.com/ftik_upstegal/"><img src="img/ig.png" style="margin-left: 120px; width: auto; height: 60px;" alt=""></a>
            </div>

         </div>
      </div>
   </section>

   <section id="contact">
      <div class="container">
         <div class="row text-center">
            <div class="col-lg-4">
               <img src="img/cntct.jpg" alt="">
            </div>
            <div class="col-lg-6 offset-lg-1">
               <form action="" method="POST">
                  <div class="mb-3">
                     <small>Nama</small>
                     <input type="text" name="nama" class="form-control">
                  </div>
                  <div class="mb-3">
                     <small>Email</small>
                     <input type="email" name="email" class="form-control">
                  </div>
                  <div class="mb-3">
                     <small>Catatan</small>
                     <textarea name="kritiksaran" id="" cols="30" rows="4" class="form-control"></textarea>
                  </div>
                  <button type="submit" name="submit" class="btn btn-brand">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </section>

   <?php include "footer.php"; ?>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

   <script>
      $(document).ready(function() {
         $('.slider').bxSlider();
      });
   </script>

   <?php

   if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $kritiksaran = $_POST['kritiksaran'];
      $insert = mysqli_query($koneksi, "INSERT INTO tb_kritiksaran VALUES(
       NULL,
      '$nama',
      '$email',
      '$kritiksaran')");

      if ($insert) {
         echo "<script>alert('Terimakasih Sudah Memberikan Kritik dan Saran !');document.location='index.php'</script>";
      } else {
         echo 'Gagal Upload !';
      }
   }
   ?>

</body>

</html>