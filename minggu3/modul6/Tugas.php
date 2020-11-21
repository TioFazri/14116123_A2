<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Nama : ", $_GET['nama'];
    echo "<br>";

    $jumlah = strlen($_GET['nama']);
    if (($jumlah > 1) && ($jumlah <= 10)) {
		$harga = 300*$jumlah;
		} elseif (($jumlah > 10) && ($jumlah <= 20)) {
			$harga = 500*$jumlah;
		} else {
			$harga = 700*$jumlah;
        }
        
        echo "Harga = $harga <br>";

    function color($color='red',$nama) {
        echo '<font color ="'.$color.'">'.$nama.'</font> <br>';
    }

    color ($_GET['warna'], $_GET['nama'])
    ?>
</body>
</html>