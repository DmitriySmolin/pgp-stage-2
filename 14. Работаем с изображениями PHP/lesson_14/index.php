<?php

$imagePath = __DIR__ . "/images/blank.png";
$fontPath = __DIR__ . '/9605.ttf';
$image = imagecreatefrompng($imagePath);
$color = imagecolorallocate($image, 0, 0, 0);
$text = 'Иванов Иван';

imagettftext($image, 50, 0, 540, 250, $color, $fontPath, $text);
imagepng($image, __DIR__ . '/result.png');

$text = '+38 (555) 55-555-55';
imagettftext($image, 36, 0, 540, 350, $color, $fontPath, $text);

imagepng($image, __DIR__ . '/result.png');

$cat = imagecreatefrompng(__DIR__ . './cat.png');
imagecopy($image, $cat, 30, 50, 0, 0, 512, 512);
imagepng($image, __DIR__ . '/result.png');

imagedestroy($image);
imagedestroy($cat);
echo '<img src="result.png" />';
