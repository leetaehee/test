<?php
echo "365mc 테스트 중 \n";

$conn = mysqli_connect("127.0.0.1", 'root', 'dltkdghrytnsla1@', 'test');

$result = mysqli_query($conn, "SELECT * from `emoticon`");

/*
 [SAMPLE 테이블]

 CREATE TABLE `emoticon` (
    `idx` INT(10) NOT NULL AUTO_INCREMENT,
    `imoticon` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
    PRIMARY KEY (`idx`) USING BTREE
 )
 COMMENT='이모티콘 테스트\r\n'
 COLLATE='utf8mb4_general_ci'
 ENGINE=InnoDB;

 [SAMPLE 데이터]
 INSERT INTO `emoticon` (`idx`, `imoticon`) VALUES (1, '	📢감탄하라 탄력람스');
 INSERT INTO `emoticon` (`idx`, `imoticon`) VALUES (2, '✨탄력까지 UP✨시켜준다고요?');

*/

// 결과 카운트 조회
$numRow = mysqli_num_rows($result);
echo "result count = " . $numRow . "\n";

if ($numRow < 1) {
    echo "데이터가 존재하지 않습니다. \n";
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "idx: {$row['idx']} | {$row['imoticon']} \n";
}

mysqli_close($conn);