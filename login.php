<?php
include 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
   header("Location:admin.php");
}

if (isset($_POST['submit'])) {
   $username = sha1($_POST['username']);
   $password = sha1($_POST['password']);

   $sql = "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";
   $result = mysqli_query($koneksi, $sql);

   if ($result->num_rows > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      header("Location:admin.php");
   } else {
      echo "<script>alert('Username atau Password Anda Salah, Silihkan Coba Lagi!')</script>";
   }
}


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


   <title>Beranda FTIK</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

   <?php include "navbar.php"; ?>

   <section id="home">
      <div class="container text-center">
         <div class="row justify-content-center">
            <div class="col-md-6">
               <h1 class="text-white">LOGIN</h1><br>
               <form action="" method="POST">
                  <div class="form-group">
                     <input type="text" name="username" class="form-control" placeholder="Username" style="border-radius: 50px;">
                  </div>
                  <div class="form-group">
                     <br>
                     <input type="password" name="password" class="form-control" placeholder="Password" style="border-radius: 50px;">
                  </div>
                  <br>
                  <div class="form-group">
                     <button type="submit" name="submit" class="btn btn-primary px-5" style="border-radius: 50px;">Masuk</button>
                  </div>
               </form>

            </div>
         </div>
      </div>
   </section>
   <?php include "footer.php"; ?>
</body>

</html>