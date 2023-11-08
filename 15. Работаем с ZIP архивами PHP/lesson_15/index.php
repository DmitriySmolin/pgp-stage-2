<?php

// Создание архива
// $zip = new ZipArchive();
// $zipFile = "04.zip";

// if(!$zip->open($zipFile, ZipArchive::CREATE)) {
//     exit('errors');
// }

// $zip->addFile('text.txt');

// echo $zip->filename;
// echo '<br>';
// echo $zip->numFiles;
// echo '<br>';

// $zip->close();

// Извлечение из архива
$zip = new ZipArchive();
$zip->open('04.zip');
$zip->extractTo('./unzip');
$zip->close();
echo 'ok';
