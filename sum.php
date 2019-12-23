<?php

function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}

echo sum(100);

?>

//課題

<?php
//1.数値を2倍にして戻す関数
function double($number){
        return $number*2;
}
echo double(4);


//2.
$a = 1;
$b = 2;
function f($a, $b){
    return $a + $b;
}
echo f(1,2);


//3.

$arr = array(1,3,5,7,9);

function product($arr){
    $result = $arr[0];
    foreach ($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo product($arr);


//4.
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($a > $max_number){
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array($arr);


//5.
//strip_tags...文字列に含まれるHTML,PHPタグを取り除く
$str = "<h1>strip_tags関数</h1>"
      . "<p>タグを取り除く</p>";
echo strip_tags($str) ."\n";


//array_push...要素を配列の最後に追加
$number = [1,2,3];
array_push($number,4,5);
print_r($number);


//array_merge...配列を結合
$item1 = [1,2,3];
$item2 = [4,5,6];
$item3 = [6,7,8];
$item_marge = array_merge($item1,$item2,$item3);
print_r($item_marge);


//time,mktime...UNIXタイムスタンプを取得できる関数
echo time();
$timestamp = mktime(0,0,0,1,1,2020);
echo $timestamp;


//date...指定された日時を任意の形式でフォーマットし、
//       日付文字列を返す関数
echo date('Y-m-d H:i:s');


?>