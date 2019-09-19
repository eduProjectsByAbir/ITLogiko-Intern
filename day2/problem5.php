<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chess board in PHP</title>
    <style>
    body{
        max-width: 650px;;
        margin: auto;
    }
    table{
        height: 600px;
        width: 600px;
        border: 1px solid #d18b47;
    }
    </style>
</head>

<body>

    <table>
    <?php
    for($r=1; $r <= 8; $r++){
        echo '<tr>';
        for($c=1; $c <= 8; $c++){
            if(($r+$c)%2 == 0){
                echo "<td bgcolor='#ffce9e'></td>";
            } else {
                echo "<td bgcolor='#d18b47'></td>";
            }
        }
        echo '</tr>';
    }
    ?>
    </table>
</body>

</html>


<?php

    $a = array(1, 44, 5, 6, 68, 9);
    $largest = 0;

    foreach($a as $v) {
        if($largest < $v)
            $largest = $v;
    }

    echo $largest;

?>