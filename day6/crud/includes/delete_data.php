<?php
include "../db/conn.php";

extract($_POST);
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $q = "DELETE FROM `customers` WHERE `id` = $id;";
    mysqli_query($conn, $q);
    header("Location: ../index.php");
}
?>