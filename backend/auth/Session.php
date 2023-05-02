<?php
session_start();

if (isset($_SESSION['username'])) {
    header('location:update.php');
} else {
    if (!isset($_SESSION['username'])) {
        echo "<script>alert('Silahkan Login Terlebih Dahulu!');</script>";
        header('location:../../frontend/Login.php');
    }
}
?>




<!DOCTYPE html>
<html>

<head>
    <title>profil</title>
</head>

<body>
    <h1>HASIL HITUNG RUMUS</h1>
    <?php
    echo "Nilai a adalah = " . $_POST["nilai1"] . "<br>";

    echo "Nilai b adalah = " . $_POST["nilai2"] . "<br>";

    echo "Rumus Dipilih = " . $_POST["rumus"] . "<br>";

    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $rumus = $_POST["rumus"];
    if ($rumus == "segitiga") {
        $hasil = (0.5 * ($nilai1 * $nilai2));
        echo "Hasil Penghitungan Rumus = " . $hasil;
    } elseif ($rumus == "persegi panjang") {
        $hasil = ($nilai1 * $nilai2);
        echo "hasil " . $hasil;
    } else {
        $hasil = ($nilai1 * $nilai2);
        echo "Hasil Penghitungan Rumus = " . $hasil;
    } ?>
</body>

</html>