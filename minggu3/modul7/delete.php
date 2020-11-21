<?php
$cari = $_GET["cari"];

$koneksi = mysqli_connect ("localhost","root","root","bukutamu") or die   
    ("Koneksi gagal");
    mysqli_select_db($koneksi, "bukutamu");

$delete = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE NRP='$cari'");


?>