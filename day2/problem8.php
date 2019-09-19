<?php
// Calculation Functiopn
function cal($num1, $num2, $op){
    if($op==1){
        $result= $num1+$num2;
    } elseif($op==2){
        $result= $num1-$num2;
    } elseif($op==3){
        $result= $num1*$num2;
    } elseif($op==4){
        $result= $num1/$num2;
    } else {
        echo "Select Operation!";
    }
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
</head>

<body>
    <form action="" method="get">
        <label for="number1">Number 1</label>
        <input type="number" name="num1" id="number1">
        <label for="op">Select Operation</label>
        <select name="op" id="op">
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">*</option>
            <option value="4">/</option>
        </select>
        <label for="number2">Number 2</label>
        <input type="number" name="num2" id="number2">
        <input type="submit" value="Calculate" name="submit">
    </form><span>
        <?php
        // getting the values
if(isset($_GET['submit'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $op = $_GET['op'];
    echo ' Result '.cal($num1, $num2, $op);
}  
?>
</span>
</body>

</html>