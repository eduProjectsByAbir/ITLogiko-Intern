<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array sorting</title>
</head>
<body>
<?php
$array = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");


// ascending order sort by key
echo "<b>ascending order sort by key</b><br>";
asort($array);
foreach($array as $key=>$value){
    echo $key.' = '. $value.'<br>';
}
// descending order sorting by key
echo "<b>descending order sorting by key</b><br>";
ksort($array);
foreach($array as $key=>$value){
    echo $key.' = '. $value.'<br>';
}

// ascending order sort by value
echo "<b>ascending order sort by value</b><br>";
arsort($array);
foreach($array as $key=>$value){
    echo $key.' = '. $value.'<br>';
}

// descending order sorting by value
echo "<b>descending order sorting by value</b><br>";
krsort($array);
foreach($array as $key=>$value){
    echo $key.' = '. $value.'<br>';
}
?>
</body>
</html>

