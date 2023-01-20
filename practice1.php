<?php
$name = "inazawasayaka";
if ($name = "inazawasayaka") {
echo "私は inazawasayaka です";
} else {
echo "あなたの名前ではありません";
}
echo "\n";

$total = 0;
echo $total;
echo "\n";

for($i = 0; $i <=10000; $i++) {
$total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "banana", "melon", "peach", "grape");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}
    
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}