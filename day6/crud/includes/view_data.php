<?php
include "db/conn.php";

$query = "SELECT * FROM customers";
$result = mysqli_query($conn, $query);
?>