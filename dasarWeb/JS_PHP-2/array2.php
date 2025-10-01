<?php
$dosen = [
    "nama" => "Elok Nur Hamdana",
    "domisili" => "Malang",
    "jenis_kelamin" => "Perempuan"
];

echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
echo "<tr><th>Key</th><th>Value</th></tr>";
foreach ($dosen as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
?>