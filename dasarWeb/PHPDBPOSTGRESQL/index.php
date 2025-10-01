<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            background: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
    </style>
</head>
<body>

<h2>Daftar Mahasiswa</h2>

<?php

$conn = pg_connect("host=localhost dbname=phpdatabase user=postgres password=000000");

if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}

$result = pg_query($conn, "SELECT * FROM \"TB_Mahasiswa\"");

if (!$result) {
    die("Query gagal: " . pg_last_error());
}

echo "<table>";
echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jurusan</th></tr>";

while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['Nim']."</td>";
    echo "<td>".$row['Nama']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['Jurusan']."</td>";
    echo "</tr>";
}
echo "</table>";

pg_close($conn);
?>

</body>
</html>
