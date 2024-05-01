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
    
    // data kelas dengan array 2 dimensi
    $array = array(
        "1C" => array("udin","ismail","adi"),
        "1D" => array("lukman","fajri","mahmud")
    );

    //menampilkan data array
    print_r($array);
    echo "<br>";

    //menampilkan data array kelas 1D
    print_r($array['1D']);
    echo "<br>";

    //menampilkan kelas 1d dengan index 0
    echo $array['1D'][0] . "<br>";

    //tampilkan fajri
    echo "Nama 'fajri' dari kelas 1D: " . $array['1D'][1] . "<br>";

    //tampilkan andi
    echo "Nama 'adi' dari kelas 1C: " . $array['1C'][2] . "<br>";

    //data kelas bisa ditulis juga dengan
    $array_simple = [
        "1C" => ["udin", "ismail","adi"],
        "1D" => ["lukman", "fajri", "mahmud"]
    ];
    ?>
</body>
</html>