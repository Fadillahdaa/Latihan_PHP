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
<body bgcolor="silver">
    <h1>Halaman PHP saya</h1>
    <?php
$siswa = array(
    array("no_urut" => 1, "nama" => "Andi", "poin" => 75),
    array("no_urut" => 2, "nama" => "Joni", "poin" => 60),
    array("no_urut" => 3, "nama" => "Jihan", "poin" => 65),
    array("no_urut" => 4, "nama" => "Aya", "poin" => 70),
    array("no_urut" => 5, "nama" => "Ita", "poin" => 85),
    array("no_urut" => 6, "nama" => "Budi", "poin" => 90),
    array("no_urut" => 7, "nama" => "Tini", "poin" => 95),
    array("no_urut" => 8, "nama" => "Sari", "poin" => 65)
);

// a) Tampilkan poin siswa dengan nomor urut 5
echo "Poin siswa dengan nomor urut 5: " . $siswa[4]['poin'] . "<br>";

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "Nama siswa yang memiliki poin 90: ";
foreach ($siswa as $data) {
    if ($data['poin'] == 90) {
        echo $data['nama'] . ", ";
    }
}
echo "<br>";

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "Nama siswa yang memiliki poin 100: ";
$found = false;
foreach ($siswa as $data) {
    if ($data['poin'] == 100) {
        echo $data['nama'] . ", ";
        $found = true;
    }
}
if (!$found) {
    echo "tidak ada";
}
?>

</body>
</html>