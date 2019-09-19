<?php
// #3: Write a PHP function to generate a random password (contains uppercase, lowercase, numeric and other)

function randomPassword($len = 8) {

    $sets = array();
    $sets[] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $sets[] = 'abcdefghijklmnopqrstuvwxyz';
    $sets[] = '0123456789';
    $sets[]  = '!@#$*%^';

    $password = '';

    while(strlen($password) < $len) {
        $randSet = $sets[array_rand($sets)];
        $password .= $randSet[array_rand(str_split($randSet))];       
    }
    
    return str_shuffle($password);
}

echo randomPassword(10);
?>
