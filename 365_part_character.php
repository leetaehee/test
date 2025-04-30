<?php

//echo preg_match("/[가-힣a-zA-Z]/","");

$phoneRep = "/^(010)[0-9]{4}[0-9]{4}|(011|016|017|018|019)[0-9]{3}[0-9]{4}$/";

echo preg_match($phoneRep, '<script>alert("Fdfd")</script>');