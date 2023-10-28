<?php

function t1()
{
    $data = file_get_contents('./one/book1.json');
    $json = json_decode($data, true);
    foreach ($json as $key => $val) {
        echo "$key $val <br>";
    }
}

function t2($path)
{
    $data = file_get_contents($path);
    $json = json_decode($data, true);
    return $json;
}

function t3($path)
{
    $out = '';
    $data = file_get_contents($path);
    $json = json_decode($data, true);
    foreach ($json as $_ => $val) {
        $out .= $val['name'] . ' ';
    }
    return $out;
}

function  t4($arr, $path)
{
    $jsonData = json_encode($arr);
    file_put_contents($path, $jsonData);
}

function t5($path)
{
    $data = file_get_contents($path);
    $json = json_decode($data, true);
    return count($json);
}
