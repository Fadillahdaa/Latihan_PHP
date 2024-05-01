<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307048">
    <meta name="author" content="Fadillahda">
</head>
<body bgcolor="lightgreen">
    <h1>LATIHAN PHP 3</h1>
    <?php
    $x = 5;
    $y = 10;

    // Arithematic operators
    echo "Penambahan".$x + $y."<br>";
    echo "Penguranga".$x - $y."<br>";
    echo "Perkalian".$x * $y."<br>";
    echo "Pembagian".$x / $y."<br>";
    echo "Modulus".$x % $y."<br>";
    echo "Exponensial".$x ** $y."<br>";
    echo ("<br>");

    //Assignment operators
    $x +=2; // $x = $x + 2
    $x *=2; // $x = $x * 2
    echo "Penambahan x".$x."<br>";
    echo "Perkalian y".$y."<br>";
    echo("<br>");

    //Incerement/Decrement operators
    echo "Isi ++x = ".++$x."<br>";
    echo "Isi x++ = ".$x++."<br>";
    echo "Isi x = ".$x."<br>";
    echo("<br>");
    echo "Isi --y = ".--$x."<br>";
    echo "Isi y-- = ".$x--."<br>";
    echo "Isi y =".$y."<br>";
    echo "(<br>)";

    //Conditional asignment operators
    $user = "FADILLAH DWI ANGGRAINI";
    // <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
    $status = (empty($user)) ? "Kosong" : "Ada isi";
    echo $status."<br>";
    //variabel $color diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";
    ?>
    
</body>
</html>