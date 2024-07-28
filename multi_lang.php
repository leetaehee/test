<?php
echo "서버 전역변수 확인하기"; 

echo "<br>";

echo "<pre>";

print_r($_SERVER);

echo "</pre>";

$a = 3;

$b = 4;

$c = 5;

echo "result = " . $a+$b+$c;