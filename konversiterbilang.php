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
<body bgcolor="lavender">
    <h1>Konversi Terbilang</h1>
    <?php
    $case = "7";
    switch ($case) {
        case "1":
            $terbilang = "satu";
            break;
        case "2":
            $terbilang = "dua";
            break;
        case "3":
            $terbilang = "tiga";
            break;
        case "4":
            $terbilang = "empat";
            break;
        case "5":
            $terbilang = "lima";
            break;
        case "6":
            $terbilang = "enam";
            break;
        case "7":
            $terbilang = "tujuh";
            break;
        case "8":
            $terbilang = "delapan";
            break;
        case "9":
            $terbilang = "sembilan";
            break;
        default:
            $terbilang = "Tidak valid";
            break;
    }

    echo "Angka $case adalah terbilang <strong>$terbilang</strong>";
    ?>
</body>
</html>