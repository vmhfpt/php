<?php

include './header.php';

function bai1() {
    $say = function($name) {
        echo "Hello " . $name . "<br>";
    };
    $say('World');

    function myCaller($myCallback) {
        echo $myCallback() ."<br>";
    }

    myCaller(function(){ echo 'Hello <br>';});

    $a = [1,2,3,4,5];
    $b = array_map(function($n) {
        return $n * $n * $n ."<br>";
    },$a);

    print_r($b);
}

function bai2() {
    function countToFive() {
        yield 1;
        yield from [2,3,4];
        yield 5;
    }
    foreach(countToFive() as $v) {
        echo $v;
    }
}

function bai3() {
    function cutString($string) {
        $newStr =  chunk_split($string,2,":");
        $count = strlen($newStr)-1;
        if($newStr[$count] == ":"){
            echo substr($newStr,0,$count);
        }else{
            echo $newStr;
        }

    }

    cutString("448538");
}

?>



    <div class="flex">
        <div class="item">
            <p><span>Bai 1:</span> Hàm ẩn danh</p>
            <?=bai1();?>
        </div>
        <div class="item">
            <p><span>Bai 2:</span> Generator </p>
            <?=bai2();?>
        </div>
        <div class="item">
            <p><span>Bai 3:</span> Dùng mã PHP để chia chuỗi </p>
            <?=bai3();?>
        </div>
    </div>
</body>
</html>