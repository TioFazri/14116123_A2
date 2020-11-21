<?php
    $koneksi = mysqli_connect ("localhost","root","root","bukutamu") or die   
    ("Koneksi gagal");
    mysqli_select_db($koneksi, "bukutamu");
    $hasil = mysqli_query ($koneksi, "select * from bukutamu");
    $jumlah = mysqli_num_rows ($hasil);
    echo "Daftar pengunjung";
    echo "Jumlah pengunjung $jumlah";

    $a=1;
    while ($baris = mysqli_fetch_array ($hasil)) {
        echo "<br>";
        echo $a;
        echo "<br>";
        echo "nama : ";
        echo $baris[0];
        echo "<br>";
        echo "alamat : ";
        echo $baris[1];
        echo "<br>";
        echo "komentar : ";
        echo $baris[2];
        echo "<br>";
        $a++;
    }
?>