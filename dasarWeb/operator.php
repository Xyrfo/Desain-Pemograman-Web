<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<h3>Operator Aritmatika</h3>";
echo "Hasil dari a + b : " . ($a + $b) . "<br>";
echo "Hasil dari a - b : " . ($a - $b) . "<br>";
echo "Hasil dari a * b : " . ($a * $b) . "<br>";
echo "Hasil dari a / b : " . ($a / $b) . "<br>";
echo "Hasil dari a % b : " . ($a % $b) . "<br>";
echo "Hasil dari a ** b : " . ($a ** $b) . "<br><br>";

echo "<h3>Operator Perbandingan</h3>";
echo "Apakah a == b ? " . var_export($a == $b, true) . "<br>";
echo "Apakah a != b ? " . var_export($a != $b, true) . "<br>";
echo "Apakah a < b ? " . var_export($a < $b, true) . "<br>";
echo "Apakah a > b ? " . var_export($a > $b, true) . "<br>";
echo "Apakah a <= b ? " . var_export($a <= $b, true) . "<br>";
echo "Apakah a >= b ? " . var_export($a >= $b, true) . "<br><br>";

echo "<h3>Operator Logika</h3>";
echo "Hasil dari a && b : " . var_export($a && $b, true) . "<br>";
echo "Hasil dari a || b : " . var_export($a || $b, true) . "<br>";
echo "Hasil dari !a : " . var_export(!$a, true) . "<br>";
echo "Hasil dari !b : " . var_export(!$b, true) . "<br><br>";

echo "<h3>Operator Penugasan</h3>";
$a = 10; 
echo "Nilai awal a = 10, b = 5<br>";

$a += $b; 
echo "Setelah a += b, nilai a = $a<br>";

$a -= $b; 
echo "Setelah a -= b, nilai a = $a<br>";

$a *= $b; 
echo "Setelah a *= b, nilai a = $a<br>";

$a /= $b; 
echo "Setelah a /= b, nilai a = $a<br>";

$a %= $b; 
echo "Setelah a %= b, nilai a = $a<br><br>";

echo "<h3>Operator Identitas</h3>";
echo "Apakah a === b ? " . var_export($hasilIdentik, true) . "<br>";
echo "Apakah a !== b ? " . var_export($hasilTidakIdentik, true) . "<br><br>";
?>
