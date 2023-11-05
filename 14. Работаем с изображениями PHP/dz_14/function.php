<?php

function t1()
{
    $imagePath = __DIR__ ."./images/blank.png";
    $fontPath = __DIR__ ."./9605.ttf";
    $image = imagecreatefrompng($imagePath);
    $text = "2020-07-02";
    $color = imagecolorallocate($image, 255, 0, 0);
    imagettftext($image, 40, 0, 250, 150, $color, $fontPath, $text);
    imagepng($image, __DIR__ . '/task_1.png');
    imagedestroy($image);
}

function t2()
{
    $imagePath = __DIR__ ."./images/blank.png";
    $image = imagecreatefrompng($imagePath);
    $flash = imagecreatefrompng(__DIR__ . './images/flash.png');
    imagecopy($image, $flash, 500, 10, 0, 0, 256, 256);
    imagepng($image, __DIR__ . '/task_2.png');
    imagedestroy($image);
    imagedestroy($flash);
}

function t3()
{
    $imagePath = __DIR__ ."./images/blank.png";
    $image = imagecreatefrompng($imagePath);
    $flash = imagecreatefrompng(__DIR__ . './images/flash.png');
    $spider = imagecreatefrompng(__DIR__ . './images/spider.png');
    $thor = imagecreatefrompng(__DIR__ . './images/thor.png');
    imagecopy($image, $flash, 10, 10, 0, 0, 256, 256);
    imagecopy($image, $spider, 250, 10, 0, 0, 256, 256);
    imagecopy($image, $thor, 500, 10, 0, 0, 256, 256);
    imagepng($image, __DIR__ . '/task_3.png');
    imagedestroy($image);
    imagedestroy($flash);
    imagedestroy($spider);
    imagedestroy($thor);
}

function t4()
{
    $imagePath = __DIR__ ."./images/blank.png";
    $fontPath = __DIR__ ."./9605.ttf";
    $image = imagecreatefrompng($imagePath);
    $text = "hello";
    $color = imagecolorallocate($image, 0, 0, 0);
    imagettftext($image, 36, 45, 250, 150, $color, $fontPath, $text);
    $thor = imagecreatefrompng(__DIR__ . './images/thor.png');
    imagecopy($image, $thor, 500, 10, 0, 0, 256, 256);
    imagepng($image, __DIR__ . '/task_4.png');
    imagedestroy($image);
    imagedestroy($thor);
}

function t5()
{
    $image = imagecreatetruecolor(300, 300);
    $flash = imagecreatefrompng(__DIR__ . './images/flash.png');
    imagecopy($image, $flash, 22, 22, 0, 0, 256, 256);
    imagepng($image, __DIR__ . '/task_5.png');
    imagedestroy($image);
    imagedestroy($flash);
}

function t6()
{
    $jpg = imagecreatetruecolor(512, 256);
    $bgColor = imagecolorallocate($jpg, 255, 255, 255);
    imagefilledrectangle($jpg, 0, 0, 512, 256, $bgColor);
    $fontPath = __DIR__ ."./9605.ttf";
    $color = imagecolorallocate($jpg, 0, 0, 0);
    $text = "hello jpeg";
    imagettftext($jpg, 50, 0, 100, 150, $color, $fontPath, $text);
    imagejpeg($jpg, __DIR__ . "/task_6.jpg");
    imagedestroy($jpg);
}
