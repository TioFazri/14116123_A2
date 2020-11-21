<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Simpan data</h1>
    <?php
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $NRP = $_POST["NRP"];
        $jurusan = $_POST["jurusan"];
        $koneksi = mysqli_connect ("localhost","root","root","bukutamu") or die   
        ("Koneksi gagal");

        mysqli_select_db($koneksi,"bukutamu");
        echo "Nama = $nama <br>";
        echo "NRP = $NRP <br>";
        echo "Alamat = $alamat <br>";
        echo "jurusan = $jurusan <br>";

        $sqlstr="insert into mahasiswa (NRP, Nama, Alamat, ID_Jur) values ('$NRP','$nama','$alamat','$jurusan')";
        $hasil= mysqli_query($koneksi, $sqlstr);

    ?>
</body>
</html>