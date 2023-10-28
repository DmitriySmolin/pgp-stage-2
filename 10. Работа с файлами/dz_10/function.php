<?php

function t1($path)
{
    if(file_exists($path)) {
        echo 1;
    } else {
        echo 0;
    }
}

function t2($path)
{
    if(file_exists($path)) {
        echo filesize($path);
    } else {
        echo 0;
    }
}

function t3($path)
{
    if(is_dir($path)) {
        echo "dir";
    } else {
        echo "file";
    }
}

function t4($path)
{
    $file = pathinfo($path);
    print_r([$file['basename'], $file['extension']]);
}

function t5($path)
{
    $handle = fopen($path, 'r');
    $contents = fread($handle, filesize($path));
    fclose($handle);
    return $contents;
}

function t6($path, $str)
{
    $fp = fopen($path, 'w');
    fwrite($fp, $str);
    fclose($fp);
}

function t7($path, $str)
{
    $fp = fopen($path, 'a');
    fwrite($fp, $str);
    fclose($fp);
}

function t8($path)
{
    if ($dh = opendir($path)) {
        while (($file = readdir($dh)) !== false) {
            if($file !== '.' && $file !== '..') {
                print_r(filesize($path.$file));
                echo '<br>';
            }
        }
        closedir($dh);
    }
}
function t9($path)
{
    $result = [];
    if ($dh = opendir($path)) {
        while (($file = readdir($dh)) !== false) {
            if($file !== '.' && $file !== '..') {
                $file_info = pathinfo($file);
                $result[] = [$file_info['basename'], $file_info['extension'], filesize($path.$file)];
            }
        }
        closedir($dh);
    }
    return $result;
}

function t10($path)
{
    if(file_exists($path)){
        return 0;
    } else {
        $fp = fopen($path,'w');
        fwrite($fp,42);
        fclose($fp);
        return 1;
    }
}
