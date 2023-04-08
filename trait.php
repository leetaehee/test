<?php

// 기존 클래스 작성하는 것과 같이 트레이트를 작성합니다.
trait geoLocation
{
    public function getLatitude() : void
    {
        echo "좌표 Latitude <br>";
    }

    public function getLongtitude() :void
    {
        echo "좌표 Longtitude <br>";
    }
}

// 지도 매핑 클래스를 생성합니다.
class mapping
{
    // use 키워드로 트레이드를 삽입합니다.
    use geoLocation;

    // 추가 클랙스 구현
    public function copyright() : void
    {
        // 본 메서드는 대체되지 않습니다.
        echo "copyright all Right JinyPHP";
    }
}

$obj = new mapping();

// 트레이드로 삽입한 메서드를 실행합니다.
$obj->getLatitude();
$obj->getLongtitude();

// 자체 선언 메서드를 출력합니다.
$obj->copyright();