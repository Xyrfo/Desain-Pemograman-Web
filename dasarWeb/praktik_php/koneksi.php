<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk menambahkan data user
$sql = "INSERT INTO user (username, password)
        VALUES ('admin', '123')";

// Eksekusi query menggunakan mysqli_query()
if (mysqli_query($koneksi, $sql)) {
    echo "Data user berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
