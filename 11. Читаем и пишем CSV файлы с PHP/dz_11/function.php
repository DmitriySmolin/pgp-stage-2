<?php

function t1()
{
    if(($file = fopen('./one/book1.csv', 'r')) !== false) {
        while(($data = fgetcsv($file, 1000, ',')) !== false) {
            for($i = 0; $i < count($data); $i++) {
                echo $data[$i].' ';
            }
            echo '<br>';
        }
        fclose($file);
    }
}

function t2($path)
{
    $res = [];
    if(($file = fopen($path, 'r')) !== false) {
        while(($data = fgetcsv($file, 1000, ';')) !== false) {
            for($i = 0; $i < count($data); $i++) {
                $res[] = $data;
            }
        }
        fclose($file);
    }
    return $res;
}

function t3($path)
{
    $res = [];
    if(($file = fopen($path, 'r')) !== false) {
        while(($data = fgetcsv($file, 1000, ';')) !== false) {
            $res[] = $data;
        }
        fclose($file);
    }
    $out = '';
    foreach($res as $value) {
        if($value[2] !== 'color') {
            $out .= $value[2].' ';
        }
    }
    print_r($out);
}

function t4($arr, $path)
{
    $file = fopen($path, 'w');
    foreach($arr as $line) {
        fputcsv($file, $line, ';');
    }
    fclose($file);
}

function t5($path)
{
    $res = [];
    if(($file = fopen($path, 'r')) !== false) {
        while(($data = fgetcsv($file, 1000, ';')) !== false) {
            $res[] = $data;
        }
        fclose($file);
    }
    print_r(count($res));
}
