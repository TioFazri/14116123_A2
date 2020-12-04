<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('locatiom:home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
    <div>
        <input type="text" name="username" placeholder="username" autofocus required>
    </div>
    <div>
        <input type="text" name="password" placeholder="password" required>
    </div>
    <button type="submit" name="login">login</button>
    </form>

    <?php
    if(isset($_SESSION['message'])) {
        ?>
        <div>
            <?= $_SESSION['message'];?>
        </div>
        <?php unset($_SESSION['message']);
    }
    ?>
</body>
</html>