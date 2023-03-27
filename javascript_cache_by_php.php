<?php
$javascript = '안녕';

$time = date('YmdHis');
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>자바스크립트 캐시를 테스트합니다.</title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <body>
        <h1>테스트는 이렇게!</h1>
        <p>여기는 php 값을 출력합니다. => <?php echo $javascript; ?></p>
        <p>여기는 자바스크립트 값을 출력합니다. => <span id="hello_javascript"></span></p>

        <script src="./js/test_cache.js?version=<?=$time?>"></script>
    </body>
</html>
