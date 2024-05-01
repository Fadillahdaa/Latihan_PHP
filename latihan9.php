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
<body bgcolor="orange">
    <h1>Halaman PHP saya</h1>
    <?php
    // contoh fungsi
    function writeMsg($nama) {
        echo "selamat datang ". $nama. "<br>";
    }
    writeMsg(nama:"Ahmad"); //pemanggilan fungsi

    // fungsi dengan mengirim nilai balik
    function tambah(int $angka1, int $angka2) {
        $a= $angka1+$angka2;
        return $a; //mengirim nilai $a ke pemanggil
    }
    $hasil=tambah(angka1:5, angka2:5);
    echo ($hasil);
    ?>
</body>
</html>