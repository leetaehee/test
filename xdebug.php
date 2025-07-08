<?php

$configAdd = false;

$a = 3;
$b = 4;

if ($configAdd === true) {
    $c = $a + $b;
} else {
    $c = $a - $b;
}

//error_log("c = " . $c);

/**
 * Undocumented function
 *
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function add(int $a,int $b) : int 
{
    return $a+$b;
}

function echoNovi(string $str) : string
{
    $rtnStr = $str;

    return $rtnStr;
}

error_log("xdebug.php");

// log 타입이 다양함
// 로그 라이브러를 쓰거나 로그 종류별로 할 수 있는 메서드 만들어야함 
error_log("echoNovi = " . echoNovi("안녕하세요"));