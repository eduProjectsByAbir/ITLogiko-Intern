<?php 
// #9: Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format.
// - Sample output : 00, 01, 02, 03, 04, 05, 06, 07, 08, 09, 10,


$input = 10;
for($i=0; $i < $input; $i++){
    for($j=0; $j < $input; $j++){
        echo $i.$j.", ";
    }
}

?>