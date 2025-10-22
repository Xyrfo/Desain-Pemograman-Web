<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi dengan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src=""></script>
</head>
<body>
<h1>Form Validasi dengan AJAX</h1>

<form id="myForm" method="post">
    <label>Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color:red"></span><br><br>

    <label>Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color:red"></span><br><br>

    <label>Password:</label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color:red"></span><br><br>

    <input type="submit" value="Kirim">
</form>

<div id="hasil"></div>

<script>
$(document).ready(function() {
    $("#myForm").submit(function(e) {
        e.preventDefault();

        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;

        // Validasi nama
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else {
            $("#nama-error").text("");
        }

        // Validasi email
        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            $("#email-error").text("");
        }

        // Validasi password
        if (password.length < 8) {
            $("#password-error").text("Password minimal 8 karakter.");
            valid = false;
        } else {
            $("#password-error").text("");
        }

        // Kirim data via AJAX jika valid
        if (valid) {
            $.ajax({
                url: "proses_validasi.php",
                type: "POST",
                data: { nama: nama, email: email, password: password },
                success: function(response) {
                    $("#hasil").html(response);
                },
                error: function() {
                    $("#hasil").html("Terjadi kesalahan saat mengirim data.");
                }
            });
        }
    });
});
</script>

</body>
</html>
