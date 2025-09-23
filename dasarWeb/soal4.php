<?php

echo "<h3>Jawaban Soal No 4.6</h3>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$total = 0;
$jumlahData = count($nilaiSiswa);

foreach ($nilaiSiswa as $index => $nilai) {
    if ($index < 2 || $index >= $jumlahData - 2) {
        continue;
    }
    echo "Nilai: $nilai <br>";
    $total += $nilai;
}

echo "Total nilai (setelah buang 2 tertinggi & 2 terendah): $total <br>";
echo "Rata-rata: " . ($total / ($jumlahData - 4));

echo "<h3>Jawaban Soal No 4.7</h3>";

$harga = 120000;
$diskon = 0;

if ($harga > 100000) {
    $diskon = 0.20 * $harga;
}

$hargaBayar = $harga - $diskon;

echo "Harga awal: Rp $harga <br>";
echo "Diskon: Rp $diskon <br>";
echo "Total yang harus dibayar: Rp $hargaBayar";

echo "<h3>Jawaban Soal No 4.8</h3>";
$poin = 620; 
$totalSkor = $poin;

echo "Total skor pemain adalah: $totalSkor <br>";

if ($totalSkor > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>
