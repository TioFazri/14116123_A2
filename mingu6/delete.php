<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$sql = "DELETE FROM siswa WHERE nim='$nim'";
$query = mysqli_query($kon, $sql) or die (mysqli_error());
if($query){
    echo "<script>alert('Data terhapus');</script>";
    echo "<script>location='tampil.php';</script>";
}else{
    echo "Error".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($kon);
?>