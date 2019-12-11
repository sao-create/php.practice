<?php
$name = "Maki";
if ($name =="Maki") {
    echo "私は{$name}です";
}   else {
    "$nameではありません";
}

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

$fruits = array("apple","orange","lemon","grape","strawberry");

foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "\n";
}

$start =1;
$end = 100;

for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
    }
}