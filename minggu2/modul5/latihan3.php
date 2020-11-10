<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Mencetak bilangan prima dari 1 - 50 <br>";
        for ($i=1; $i <= 50; $i ++) {
            $x= 0;
            for ($j =1; $j <=$i; $j++) {
                if ( $i % $j == 0) {
                    $x++;
                }
                }
                 if ($x == 2) {
                    echo $i;
                    echo ", ";
            }
        }
    ?>
</body>
</html>