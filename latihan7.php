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
    <h1>Halaman PHP saya</h1>
    <?php
    $namaBuah = array("Nanas","Mangga","jeruk","Apel","Melon","Manggis");
    echo "saya suka ". $namaBuah[0]. ", ". $namaBuah[1]. " dan ".$namaBuah[2].". ";

    //tampilkan Mangga
    echo " saya suka ". $namaBuah[0];
    //tampilkan Jeruk
    echo " saya suka ".$namaBuah[1];
    //tampilkan apel
    echo" saya suka ".$namaBuah[2];
    //tampilkan Melon
    echo " saya suka ".$namaBuah[3];

    //array dengan spesifikasi index
    $umur = array("Andi"=>"35 Tahun","Ben"=>"37 Tahun","Joe"=>"96 Tahun");
    $umur['ahmad']="50 Tahun";
    if (isset($umur['Andi'])) {
        echo "Umur Andi adalah " . $umur['Andi'] . ".<br>";
    } else {
        echo "Umur Andi tidak ditemukan.<br>";
    }

    //tampilkan semua umur
    foreach ($umur as $nama => $usia) {
        echo "Umur " . $nama . " adalah " . $usia . ".<br>";
    }
    ?>
</body>
</html>