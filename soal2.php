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
    <?php
    // Total uang yang akan diambil Ani
    $totalUang = 1387500;

    // Daftar pecahan uang yang berlaku
    $pecahanUang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

    // Inisialisasi array untuk menyimpan jumlah pecahan uang yang diperoleh Ani
    $jumlahPecahan = array_fill(0, count($pecahanUang), 0);

    // Proses penentuan jumlah pecahan uang
    for ($i = 0; $i < count($pecahanUang); $i++) {
    $jumlahPecahan[$i] = floor($totalUang / $pecahanUang[$i]);
    $totalUang %= $pecahanUang[$i];
    }

    // Menampilkan hasil
    for ($i = 0; $i < count($pecahanUang); $i++) {
        if ($jumlahPecahan[$i] > 0) {
        echo "Nominal Rp. " . number_format($pecahanUang[$i], 0, ',', '.') . " sebanyak " . $jumlahPecahan[$i] . " lembar <br>";
        }
    }
    ?>
</body>
</html>