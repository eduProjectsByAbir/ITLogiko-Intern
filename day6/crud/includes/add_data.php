<?php
include "../db/conn.php";

extract($_POST);
if(isset($_POST['submit'])){
    $q = "INSERT INTO customers (`fname`, `lname`, `email`, `password`, `gender`, `dob`, `education`, `address`, `bio`
) Values ('$fname', '$lname', '$email', '$password', '$gender', '$dob', '$education', '$address', '$bio')" ;
    mysqli_query($conn, $q);
    header("Location: ../index.php");
}

?>