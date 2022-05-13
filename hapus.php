<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $idpejabat = $_GET['id'];
    $query = "DELETE FROM tb_pejabat WHERE id = $idpejabat";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: pejabat.php");
    } else {
        echo "gagal";
    }
}

if (isset($_GET['id_slider'])) {
    $idslider = $_GET['id_slider'];
    $query = "DELETE FROM tb_slider WHERE id = $idslider";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: admin_slider.php");
    } else {
        echo "gagal";
    }
}

if (isset($_GET['id_ks'])) {
    $idks = $_GET['id_ks'];
    $query = "DELETE FROM tb_kritiksaran WHERE id = $idks";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: kritiksaran.php");
    } else {
        echo "gagal";
    }
}

if (isset($_GET['id_opsi'])) {
    $idopsi = $_GET['id_opsi'];
    $query = "DELETE FROM tb_admin WHERE id = $idopsi";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: pengaturan.php");
    } else {
        echo "gagal";
    }
}

if (isset($_GET['id_news'])) {
    $id_news = $_GET['id_news'];
    $query = "DELETE FROM tb_news WHERE id = $id_news";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: news.php");
    } else {
        echo "gagal";
    }
}

if (isset($_GET['id_pmb'])) {
    $id_pmb = $_GET['id_pmb'];
    $query = "DELETE FROM tb_pmb WHERE id = $id_pmb";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: admin_pmb.php");
    } else {
        echo "gagal";
    }
}

if (isset($_GET['id_biaya'])) {
    $id_biaya = $_GET['id_biaya'];
    $query = "DELETE FROM tb_biaya WHERE id = $id_biaya";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: biaya_pendidikan.php");
    } else {
        echo "gagal";
    }
}

if (isset($_GET['id_brosur'])) {
    $id_brosur = $_GET['id_brosur'];
    $query = "DELETE FROM tb_brosur WHERE id = $id_brosur";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: admin_brosur.php");
    } else {
        echo "gagal";
    }
}
