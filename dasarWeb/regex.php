<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!<br>";
} else {
    echo "Tidak ada huruf kecil!<br>";
}

$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = '<br> I like apple pie.<br>';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;

$pattern = '/go*d/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

$pattern = '/go?d/';
$text = 'god is good and gd is weird.';

if (preg_match_all($pattern, $text, $matches)) {
    echo "<br> Cocokkan: " . implode(', ', $matches[0]);
} else {
    echo "Tidak ada yang cocok!";
}

$pattern = '/go{1,2}d/';
$text = 'god is good, but goood is too much.';

if (preg_match_all($pattern, $text, $matches)) {
    echo "<br> Cocokkan: " . implode(', ', $matches[0]);
} else {
    echo "Tidak ada yang cocok!";
}
?>