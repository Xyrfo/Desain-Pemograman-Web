<?php
if (isset($_POST["submit"])) {
    $targetDir = "uploads/"; // folder harus sudah ada
    $targetFile = $targetDir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxsize = 5 * 1024 * 1024; // maksimal 5 MB

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
                echo "File berhasil diunggah ke folder <strong>uploads</strong>.";
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
}

?>