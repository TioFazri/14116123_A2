<?php
$koneksi = mysqli_connect ("localhost","root","root","mahasiswa") or die
("Koneksi gagal");

mysqli_select_db($koneksi, "bukutamu");
$hasil = mysqli_query($koneksi, "select * from bukutamu");
while ($row = mysqli_fetch_assoc ($hasil)) {
    print_r($row);
}
?>