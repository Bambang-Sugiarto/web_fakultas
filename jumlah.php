<?php
include "koneksi.php";

$data_news = mysqli_query($koneksi, "SELECT * FROM tb_news");
$jumlah_news = mysqli_num_rows($data_news);

$data_pejabat = mysqli_query($koneksi, "SELECT * FROM tb_pejabat");
$jumlah_pejabat = mysqli_num_rows($data_pejabat);

$data_ks = mysqli_query($koneksi, "SELECT * FROM tb_kritiksaran");
$jumlah_ks = mysqli_num_rows($data_ks);

$data_admin = mysqli_query($koneksi, "SELECT * FROM tb_admin");
$jumlah_admin = mysqli_num_rows($data_admin);
