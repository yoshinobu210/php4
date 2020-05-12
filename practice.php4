<?php
echo 'hello php!';
function outputDouble($num){
  $result = $num * 2;
  echo $result;
}
outputDouble(5);
echo "\n";
function f($a, $b){
  return $a + $b;
}
echo f(1,2);
echo "\n";
function multiply($arr){
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  echo $result;
}
multiply(array(1, 3, 5 ,7, 9));
echo "\n";

function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;
    }
    }
    
  return $max_number;
}
  $array = [12, 6, 5,3];

echo max_array($array);
echo "\n";
$str = "<h1>谷口</h1>"
  . "<p>慶伸</p>";
echo strip_tags($str);
echo "\n";
$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);
echo "\n";
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
print_r($array);
$time1 = time();
$time2 = time() + (3 * 24 * 60 * 60);
if($time1 < $time2){
  echo '$time2が大きい値です';
}
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;
echo date('Y/m/d');
echo '<br>';