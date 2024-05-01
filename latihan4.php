<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{233307048}">
    <meta name="author" content="{Fadillahda}">
</head>
<body bgcolor="lavender">
    <h1>Waktu</h1>
    <?php
    /* operator logika yang bisa digunakan 
    * == Sama engan    $x == $y
    * === Identical $x === $y
    * != Tidak sama dengan $x != $y
    * <> Tidadk sama dengan $x <> $y
    * !== Not identical $x !== $y
    * > lebih besar dari $x > $y
    * < Kurang dari $x < $y
    * >= Lebih besar atau sama dengan $x >= $y
    * <= Kurang dari atau sama dengan $x <= $y
    * <=> spaceship $x <=> $y
    */

    $t = date("H"); // mendapatkan jam dengan format 1-24
    echo "<br> If <br>";
    if ($t < 16 ){
        echo "Selamat siang!";
    }
    $t = date("H"); // mendapatkan jam dengan format 1-24
    echo "<br> If dan Else <br>";
    if ($t < 20){
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }
    echo "<br> Nested If <br>";
    if ($t < 8) {
        echo "Selamat Pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat Malam!";
    }
    ?>
</body>
</html>