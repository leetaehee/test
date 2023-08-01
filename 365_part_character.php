<?php

$searchWord = 'Gwendy Aniko';
$name = 'Gwendy Aniko';
$nameAlias = 'gwendy aniko';

// 소문자로 치환 후 비교
$temp = strtolower($searchWord);

//echo strpos($nameAlias, $temp);

if (strpos($nameAlias, $temp) !== false) {
    //echo '11';
}

echo str_replace(' ', '', '안녕 하세요');

