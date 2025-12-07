<?php
header("Content-Type: application/json; charset=utf-8");

$data = [
    'result' => true,
    'name' => '이태희',
    'msg' => '자바스크립트 async await promise',
];

echo json_encode($data);