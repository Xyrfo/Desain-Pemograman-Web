<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Input Aman</title>
</head>
<body>

<h2>Form Input Aman</h2>

<form method="post" action="">
    <label for="input">Masukkan teks:</label><br>
    <input type="text" name="input" id="input" required><br><br>

    <label for="email">Masukkan email:</label><br>
    <input type="email" name="email" id="email" required><br><br>

    <input type="submit" value="Kirim">
</form>

<hr>

<?php
// Langkah 2 — proses data setelah dikirim dari form
if (isset($_POST["input"])) {
    $input = $_POST["input"];
    $inputAman = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    echo "<h3>Hasil Input:</h3>";
    echo "Sebelum disanitasi: " . $input . "<br>";
    echo "Setelah disanitasi (aman): " . $inputAman . "<br><br>";
}

if (isset($_POST["email"])) {
    $email = $_POST["email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email valid: " . $email;
    } else {
        echo "Email tidak valid.";
    }
}
?>

</body>
</html>
