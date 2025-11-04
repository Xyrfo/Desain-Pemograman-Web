<?php
if (isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])) {
    setcookie("beliNovel", $_POST["beliNovel"]);
    setcookie("beliBuku", $_POST["beliBuku"]);
    header("location: keranjangBelanja.php");
}
?>

<html>

<head>
</head>

<body>
    <h2> Keranjang Belanja </h2>
    <?php
    $beliNovel = $_COOKIE['beliNovel'];
    $beliBuku = $_COOKIE['beliBuku'];
    echo "Jumlah Novel:" . $beliNovel . "<br>";
    echo "Jumlah Buku :" . $beliBuku;
    ?>
</body>

</html>