<?php

$a = [
    [1,2,3],
    ['hi','hello','test'],
    [4,5,6]
];

$file = fopen('book2.csv', 'w');
foreach($a as $line) {
    fputcsv($file, $line, ';');
}
