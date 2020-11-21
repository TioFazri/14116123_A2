<?php
$kolom = $_POST["kolom"];
$cari = $_POST["cari"];

$koneksi = mysqli_connect ("localhost","root","root","bukutamu") or die   
    ("Koneksi gagal");
    mysqli_select_db($koneksi, "bukutamu");

$hasil = mysqli_query ($koneksi,"select * from mahasiswa where $kolom like '%$cari'");

$jumlah = mysqli_num_rows($hasil);
echo "Ditemukan : $jumlah hasil pencarian";
echo "<br>";
echo "<br>";
while ($baris = mysqli_fetch_array($hasil)) {
        echo "NRP : ";
        echo $baris[0];
        echo "<br>";
        echo "nama : ";
        echo $baris[1];
        echo "<br>";
        echo "alamat : ";
        echo $baris[2];
        echo "<br>";
        echo "Jurusan : ";
        echo $baris[3];
        echo "<br>";echo "<br>";
}
?>