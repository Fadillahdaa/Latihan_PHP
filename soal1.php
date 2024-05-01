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
<body bgcolor="lightskyblue">
    <h1>Halaman PHP saya</h1>
    <?php
    // Gaji pokok dan tunjangan jabatan
    $gajiPokok = 3250000;
    $tunjanganJabatan = 1200000;

    // Menghitung gaji kotor
    $gajiKotor = $gajiPokok + $tunjanganJabatan;

    // Menghitung pajak penghasilan 10%
    $pajak = 0.1 * $gajiKotor;

    // Menghitung gaji bersih
    $gajiBersih = $gajiKotor - $pajak;

    // Menampilkan hasil
    echo "Gaji Bersih yang diterima Obi setiap bulannya adalah Rp. " . number_format($gajiBersih, 0, ',', '.') . ",-";
    ?>
</body>
</html>