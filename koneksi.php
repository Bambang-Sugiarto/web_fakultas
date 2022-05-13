<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "db_ftik";

$koneksi = mysqli_connect($server, $username, $password, $db) or die(mysqli_error($koneksi));
