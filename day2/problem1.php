<?php
// #1: Write a PHP script which displays all the numbers between 500 and 1000 that are divisible by 5.

$i = 500;

for($i; $i <= 1000; $i++){
    if($i % 5 == 0){
        echo $i.'<br>';
    }
}
?>