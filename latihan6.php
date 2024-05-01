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
<body bgcolor="lightgrey">
    <h1>Halaman saya</h1>
    <?php
    // while loop
    $x = 5;
    while ($x > 5){
        echo "Nomor : $x <br>";
        $x--;
    }

    // do while 
    $x = 1;
    do {
        echo "Nomor : $x <br>";
        $x++;
    } while ($x <=5);

    // foreach
    $colors = array("red","green","silver","yellow");
    foreach ($colors as $value){
        echo "$value <br>";
    }

    // for 
    for ($x = 0; $x <= 10; $x++) {
        echo "Nomor : $x <br>";
    }

    // for dengan break
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "Nomor : : $x <br>";
    }
    ?>
</body>
</html>