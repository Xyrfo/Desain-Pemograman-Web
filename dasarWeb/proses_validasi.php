<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($nama) || empty($email) || empty($password)) {
        echo "Semua field wajib diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format email tidak valid.";
    } elseif (strlen($password) < 8) {
        echo "Password minimal 8 karakter.";
    } else {
        echo "Data berhasil dikirim:<br>Nama = $nama<br>Email = $email<br>Password diterima dengan aman.";
    }
}
?>
