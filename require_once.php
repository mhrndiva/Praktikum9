<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaa Modularisasi</title>
</head>
<body>
    <h2>Prnggunaan require_once</h2>
    <?php
    require_once("function.php");
    echo("Luas segi empat dengan p = 2 dan 1 = 4 adalah ".luas(2,4)."<br>");
    require_once("function.php");
    echo("Luas segi empat adalah p = 5 dan 1 = 4 adalah ".luas(5,4));
    ?>
</body>
</html>