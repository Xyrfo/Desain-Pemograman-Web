<?php

echo "<h3>Perhitungan Nilai Numerik</h3>";

$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br><br>";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<h3>Perhitungan Jarak Tempuh</h3>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    echo "Hari ke-$hari : Jarak yang ditempuh = $jarakSaatIni km<br>";
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

echo "<h3>Perhitungan Panen Buah</h3>";

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $buahPerLahan = $tanamanPerLahan * $buahPerTanaman;
    $jumlahBuah += $buahPerLahan;
    echo "Lahan ke-$i menghasilkan $buahPerLahan buah. Total sementara: $jumlahBuah buah<br>";
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<h3>Perhitungan Skor Ujian</h3>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $index => $skor) {
    echo "Siswa ke-" . ($index+1) . " : $skor <br>";
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<h3>Perhitungan Nilai Siswa</h3>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 96];

foreach ($nilaiSiswa as $index => $nilai) {
    if ($nilai < 60) {
        echo "Siswa ke-" . ($index+1) . " : Nilai $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Siswa ke-" . ($index+1) . " : Nilai $nilai (Lulus) <br>";
} 
?>