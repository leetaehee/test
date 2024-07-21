<?php
    $conn = mysqli_connect("127.0.0.1", 'root', 'dltkdghrytnsla1@', 'test');

    // 테스트입니다..

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $enterAA = nl2br(addslashes($_POST['aa']));
        //$enterAA = htmlspecialchars($_POST['aa']);

        $result = mysqli_query($conn, "
            INSERT INTO `board_test` 
            SET `aa` = '{$enterAA}'
        ");
    }

    $response = '';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $result = mysqli_query($conn, "SELECT * FROM `board_test` WHERE `idx` = '6'");

        while ($row = mysqli_fetch_assoc($result)) {
            //echo nl2br($row['aa']);

            $response = nl2br($row['aa']);
        }
    }

?>

<form id="aa" name="bb" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <textarea name="aa"><?=$response?></textarea>

    <input type="submit" id="btn_save" value="저장">
</form>