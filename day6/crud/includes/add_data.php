<?php
$db = mysqli_connect('localhost', 'root', '', 'test', '3307');
extract($_POST);
if(isset($_POST['submit'])){
    $q = "INSERT INTO newdata (`name`, `email`) Values ('$fname', '$email')" ;
    mysqli_query($db, $q);
    header("Location: ../index.php");
}

?>