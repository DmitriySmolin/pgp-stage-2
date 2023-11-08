<?php

function t1()
{
    $zip = new ZipArchive();
    $zipFile = '1.zip';
    if(!$zip->open($zipFile, ZipArchive::CREATE)) {
        echo 'error';
    }
    $zip->addFile('t1.txt');
    $zip->close();
}

function t2()
{
    $zip1 = new ZipArchive();
    $zip1->open('1.zip');
    echo $zip1->numFiles;
    $zip1->close();

    echo '<br>';

    $zip2 = new ZipArchive();
    $zipFile = '2.zip';
    if(!$zip2->open($zipFile, ZipArchive::CREATE)) {
        echo 'error';
    }
    $zip2->addFile('t1.txt');

    $zip2->close();
    echo $zip2->numFiles;
}

function t3()
{
    $zip = new ZipArchive();
    $zipFile = '3.zip';
    if(!$zip->open($zipFile, ZipArchive::CREATE)) {
        echo 'error';
    }
    $zip->addFile('t1.txt');
    $zip->addFile('images/flash.png');
    $zip->close();
}

function t4()
{
    $zip = new ZipArchive();
    $zipFilename = '4.zip';

    if ($zip->open($zipFilename, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
        $zip->addFile('t1.txt', 'one/t1.txt');
        $zip->close();
    }
}
function t5($arc, $folder)
{
    $zip = new ZipArchive();
    $zip->open($arc);
    $zip->extractTo($folder);
    $zip->close();
}
