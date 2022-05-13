<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>BEM</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

   <?php include "navbar.php"; ?>

   <section id="home">
      <div class="container text-center">
         <div class="row justify-content-center">
            <div class="col-md-10">
               <p class="text-white">SELAMAT DATANG DI</p>
               <h1 class="text-white display-5">Fakultas Teknik dan Ilmu Komputer</h1>
               <a href="login.php" class="btn btn-brand">Login</a>
            </div>
         </div>
      </div>
   </section>

   <section id="features">
      <div class="container">
         <div class="row">
            <div class="col-12 section-intro">
               <h1>BEM</h1>
               <div class="hline"></div>
            </div>
         </div>
         <div class="row gy-4">
            <div class="col-lg-12">
               <p class="lead" align="Justify">
                  BADAN EKSEKUTIF MAHASISWA (BEM)
                  <br>Merupakan Organisasi Internal Mahasiswa dalam sebuah kampus yang berfungsi sebagai wadah bagi mahasiswa untuk menyampaikan aspirasi kepada lembaga. BEM terdiri dari tingkat Universitas dan tingkat fakultas.
               </p>
            </div>
         </div>
      </div>
   </section>
   <?php include "footer.php"; ?>
</body>

</html>