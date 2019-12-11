<?php
$name = "Maki";
if ($name =="Maki") {
    echo "私は[$name]です";
}   else {"[$name]ではありません";
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