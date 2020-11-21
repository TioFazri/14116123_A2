<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>DATA MAHASISWA PENS</h1>
<h1>= = = = = = = = = == = = = =</h1>
<h1>TAMBAH DATA</h1>
<br>
    <form action="tambahdata.php" method="post">
    NRP = <input type="text" name="NRP" size="35" maxlength="50"> <br>
    NAMA = <input type="text" name="nama" size="35" maxlength="50"> <br>
    ALAMAT = <input type="text" name="alamat" size="35" maxlength="50"> <br>
    JURUSAN = <select name="jurusan" id="">
                <option value="14">14-IF</option>
                <option value="13">13-Elektro</option>
                </select>
    <input type="submit" value="simpan">
    <input type="reset" value="reset">
    </form>
    <br>
    <p>===================================================================</p>
    <h1>SEARCH DATA</h1>
    <form action="search.php" method="post">
    <select name="kolom" id="">
    <option value="NRP">nrp</option>
    <option value="Nama">nama</option>
    <option value="Alamat">Alamat</option>
    </select>
    Pencarian
    <input type="text" name="cari">
    <input type="submit" value="cari">
    </form>
    <br>
    <p>====================================================================</p>
    <br>
    <h1>Delete data</h1>
    <form action="delete.php">
        INPUT NRP <input type="text" name="cari">
        <input type="submit" value="delete">
    </form>
</body>
</html>