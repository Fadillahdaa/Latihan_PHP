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
    <h1>Halaman PHP saya</h1>
    <form method="post">
        Masukkan nilai angka:
        <input type="text" name="nilai" required>
        <input type="submit" value="Konversi">
    </form>
    <?php
    /* Huruf Nilai
    C  = 0 -> 59
    BC = 60 -> 69
    B  = 70 -> 79
    AB = 80 -> 89
    A  = 90 -> 100
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];

        if ($nilai >= 0 && $nilai <= 59) {
            echo "$nilai mendapat Predikat <strong>C</strong>";
        } elseif ($nilai >= 60 && $nilai <= 69) {
            echo "$nilai mendapat Predikat  <strong>BC</strong>";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            echo "$nilai mendapat Predikat <strong>B</strong>";
        } elseif ($nilai >= 80 && $nilai <= 89) {
            echo "$nilai mendapat Predikat <strong>AB</strong>";
        } elseif ($nilai >= 90 && $nilai <= 100) {
            echo "$nilai mendapat Predikat <strong>A</strong>";
        } else {
            echo "Nilai yang dimasukkan tidak valid";
        }
    }
    ?>
</body>
</html>