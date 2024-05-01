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
<body bgcolor="lightskyblue">
    <h1>warna</h1>
    <?php
    $warna = "hijau";
    switch ($warna) {
        case "merah":
            echo "warna adalah merah";
            break;
            case "kuning":
                echo "warna adlah kuning";
                break;
                case "hijau":
                    echo "warna adalah hijau";
                    break;
                    default:
                    echo "warna tidak dikenal";
    }
    echo "<br>";
    ?>
</body>
</html>