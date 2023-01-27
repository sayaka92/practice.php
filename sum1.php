<?php
function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }
    return $result;
}
echo sum(100);
echo "\n";


function nibai($max){
    $result = 1;
    $result = $max * 2;
    return $result;
}
echo nibai(10);
echo "\n";


function add($a, $b){
    $i = $a + $b;
    return $i;
   }
echo add(20,30);
echo "\n";


function add2($c, $d){
    $i = $c + $d;
    return $i;
    }
echo add2(62,47);
echo "\n";


function kakeru_array($arr){
    $result = 1;
    foreach($arr as $num){
        $result *=  $num;  
    }
    return $result;
}
echo kakeru_array(array(1, 3, 5, 7, 9));
echo "\n";

function hiku_array($arr){
    $result = 100;
    foreach($arr as $num){
        $result -= $num;
    }    
    return $result;
}
echo hiku_array(array(4, 3, 2, 1));
echo "\n";


function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
    }

return $max_number;
}
echo max_array(array(1, 3, 5, 7, 9));
echo "\n";

$str = "<h1>strip_tags SNOOPY</h1>"
    . "<p> and Woodstock</p>";
    echo strip_tags($str);
    echo "\n";
    
$str = "<h1>strip_tags rakuten</h1>"
    . "<p>ichiba</p>";
    echo strip_tags($str);
    echo "\n";


$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);
echo "\n";

$color = ['red', 'blue', 'green'];
array_push($color, 'pink', 'yellow');
print_r($color);
echo "\n";


$fruits = ['apple', 'orange', 'melon'];
array_unshift($fruits, 'banana', 'pineapple');
print_r($fruits);
echo "\n";

$color = ['red', 'blue', 'green'];
array_unshift($color, 'pink', 'yellow');
print_r($color);
echo "\n";


//2023年1月23日 7時30分0秒
$day1 = mktime(7, 30, 0, 23, 1, 2023);
echo $day1;
echo "\n";


$tomorrow = time() + (24 * 60 * 60);
echo $tomorrow;
echo "\n";

$yesterday = time() - (24 * 60 * 60);
echo $yesterday;
echo "\n";


$date1 = date("Y/m/dH:i:s");
echo $date1;
echo "\n";

$date2 = date("Y年m月d日H時i分s秒");
echo $date2;
echo "\n";
