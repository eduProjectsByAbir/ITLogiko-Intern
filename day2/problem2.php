<?php
// #2 Write a program to find the largest number in an array.
$array = array(22,222,2,100,500, 1000, 450, 1241, 1145, 2500, 1025);
echo "<pre>".print_r($array, true)."</pre>";
rsort($array);
echo $array[0];
echo "<br>";
$array = array(1,2,3,33,44,88,1,11,45,12,789,454,545,100,120,136,145);
$largest = 0;

foreach($array as $value){
    if($largest < $value){
        $largest = $value;
    }
}
echo $largest;
?>
