<?php

// Размер файла
echo filesize('./one/t1.txt');

//Создаем файл
$fp = fopen('./one/data.txt', 'w');
// fwrite($fp, 'hello world');
// fwrite($fp, '23');
fwrite($fp, date('Y-m-d H:i:s', time()));
fclose($fp);

//Читать файл
$filename = './one/data.txt';
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
fclose($handle);
echo '<br>';
var_dump($contents);
echo '<br>';

// Получить содержимое папки
if ($handle = opendir('./one')) {
    while(false !== ($entry = readdir($handle))) {
        if($entry != '.' && $entry != '..') {
            echo "$entry<br>";
            echo filesize("./one/". $entry);
            echo "<br>";
        }
    }
}
