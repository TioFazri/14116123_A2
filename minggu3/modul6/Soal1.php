<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function hitung($number) {
            if ($number < 2) {
                return "Tidak ada nilai";
            } else {
                for ($i = $number; $i>1; $i--) {
                    $number = $number *($i-1);
                }
                echo $number;
            }
        }
        $x = 6;
        echo hitung($x);
    ?>
</body>
</html>