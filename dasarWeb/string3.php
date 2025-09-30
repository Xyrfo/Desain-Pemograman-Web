<?php

$pesan = "Saya arek malang";
# ubah variabel $pesan menjadi array per kata
$pesanPerkata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerkata = array_map(fn($kata) => strrev($kata), $pesanPerkata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerkata);

echo $pesan . "<br>";
?>
