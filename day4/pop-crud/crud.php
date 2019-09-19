<?php
session_start();
include_once "db.php";
include_once "functions.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = check_input($_POST['name']);
    $email = check_input($_POST['email']);
    $password = check_input($_POST['password']);
    $bio = check_input($_POST['bio']);
    $target_path = "uploads/";
    $target_path = $target_path . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $target_path);
    if(!empty($name) and !empty($email) and !empty($password) and !empty($target_path) and !empty($bio)){
        $result = insert_data($name, $email, $password, $target_path, $bio);
        if (!$result) {
            echo mysqli_error($con);
        } else {
            $_SESSION['name'] = "Data Inserted";
            header("Location: index.php");
        }
    } else {
        $_SESSION['name'] = "Please Fill all form.";
    }
}


?>