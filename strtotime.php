<?php
$todayTime = time();
//$todayTime = strtotime('2023-05-12 19:22:00');

$startTime = strtotime('2023-05-12 17:00:00');

$endTime = strtotime('2023-05-12 18:00:00');

echo "현재 = {$todayTime} , 비교 : {$startTime} ~ {$endTime} <br>";

if ($todayTime >= $startTime && $todayTime <= $endTime) {
    echo "Ok..";
} else {
    echo "No..";
}