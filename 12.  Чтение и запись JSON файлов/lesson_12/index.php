<?php

// read json files
echo '<pre>';
$res = file_get_contents('s.json');

print_r($res);
echo '<br>';
$data = json_decode($res, true);
// var_dump($data);
for ($i = 0; $i < count($data); $i++) {
    $data[$i]['age'] = $data[$i]['age'] + 10;
}
print_r($data);
echo '<pre>';

// write json

$jsonData = json_encode($data);
file_put_contents('t.json', $jsonData);
