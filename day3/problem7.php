<?php
// Write a program to construct the following pattern, using a nested for loop
   

for($i=1; $i<=10; $i++){
   for($j=1; $j<=$i; $j++){
       if($i >= 5){
          break;
       }
       echo "*";
    }
       for($j=10-$i;$j>=1;$j--){
         if ($i < 5) continue; 
         echo "*";  
         }
   echo "<br>";  
   }  

?>