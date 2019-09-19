<?php
// Write a PHP program to print alphabet pattern 'A'
for ($r = 0; $r <= 10; $r++) {
    for ($c = 0; $c <= 10; $c++) {
        if(($c == 1 or $c == 10) and $r != 0 or ($r == 0 or $r== 5) and ($c > 1 and $c < 10)){
            echo '*';
        }  else {
            echo "&nbsp ";
        }
    }
    echo '<br>';
}

?>