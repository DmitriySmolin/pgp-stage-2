<?php
// timestamp
// unix time
$t = time();
echo date('Y-m-d H:i A', $t) . '<br>';
echo $t . '<br>';

//переключаем тайм зону
// date_default_timezone_set('America/Los_Angeles');
// $t = time();
// echo date('Y-m-d H:i A', $t) . '<br>';
// echo $t . '<br>';

// timestamp -> unix time
$s = '10 September 2000 20:00';
echo strtotime($s);
