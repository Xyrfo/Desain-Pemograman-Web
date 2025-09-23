<?php
$daftarNilai = [
    ['nama' => 'Alice', 'nilai' => 85],
    ['nama' => 'Bob', 'nilai' => 92],
    ['nama' => 'Charlie', 'nilai' => 78],
    ['nama' => 'David', 'nilai' => 64],
    ['nama' => 'Eva', 'nilai' => 90],
];

$total = 0;
foreach ($daftarNilai as $siswa) {
    $total += $siswa['nilai'];
}

$rataRata = $total / count($daftarNilai);

echo "<h3>Rata-rata kelas: $rataRata</h3>";
echo "<h3>Daftar siswa dengan nilai di atas rata-rata:</h3>";

foreach ($daftarNilai as $siswa) {
    if ($siswa['nilai'] > $rataRata) {
        echo "Nama: {$siswa['nama']}, Nilai: {$siswa['nilai']} <br>";
    }
}
?>
