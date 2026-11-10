<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="koszyk.php?id=chleb">Chleb</a>
    <a href="koszyk.php?id=masło">Masło</a>
    <a href="koszyk.php?id=śmietana">Śmietana</a>    

    <?php
    if (isset($_GET['id'])){
        $produkt = $_GET['id'];
        $_SESSION['koszyk'] .= $produkt." ";
        echo $_SESSION['koszyk'];

    }

    ?>

</body>
</html>