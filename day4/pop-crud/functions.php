<?php
include "db.php";
// creating a function for checking the incomming data
function check_input($data){
    if(!empty($data)){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
    return $data;
}

function insert_data($name, $email, $password, $image, $bio){
    global $con;
    $query = "INSERT INTO table_1(`name`, `email`, `password`, `image`, `bio`) VALUES('$name', '$email','$password', '$image','$bio')";
    $result = mysqli_query($con, $query);
    return $result;
}

?>