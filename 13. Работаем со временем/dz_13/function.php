<?php

function t1()
{
    return time();
}

function t2()
{
    return date('D', time());
}

function t3($year)
{
    return date('L', $year);
}

function  t4()
{
    return date('m', time());
}

function t5()
{
    return date('Y-m-d H:i', time());
}

function t6()
{
    return strtotime('2023-10-29 00:00');
}

function t7($m)
{
    $year = date('Y');
    $date = mktime(0, 0, 0, $m, 1, $year);
    echo $date;
}

function t8($t)
{
    $day = date('D', $t);
    return $day === 'Sat' || $day === 'Sun' ? 1 : 0;
}
function t9($s)
{
    $currentDate = date("Y-M-d");
    $birthTimestamp = strtotime($s);
    $currentTimestamp = strtotime($currentDate);
    $days = ($currentTimestamp - $birthTimestamp) / (60 * 60 * 24);
    return ceil($days);
}

function t10()
{
    // Получаем текущую дату и время
    $currentTime = time();

    // Получаем текущий год
    $currentYear = date("Y");

    // Получаем первый день текущего года
    $startOfYear = strtotime('01-01-' . $currentYear);

    // Вычисляем количество секунд, прошедших с начала текущего года
    $secondsPassed = $currentTime - $startOfYear;

    return $secondsPassed;
}
