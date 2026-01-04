<?php

$사용자 = $_GET['user'] ?? '이태희';

echo "Hello PHP! {$사용자} " . date('Y-m-d H:i:s') . "=>" . phpversion();
