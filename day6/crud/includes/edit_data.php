<?php
include "../db/conn.php";

extract($_POST);
if (isset($_POST['submit'])) {
    $q = "UPDATE `customers` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `gender` = '$gender', `dob` = '$dob', `education` = '$education', `address` = '$address', `bio` = '$bio' WHERE `customers`.`id` = $id;";
    mysqli_query($conn, $q);
    header("Location: ../index.php");
}

?>