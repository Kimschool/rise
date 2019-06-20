<?php
$host = "localhost";
$id = "root";
$password = "kimschool1";
$db = "rise";

$conn = new mysqli($host, $id, $password, $db);
mysqli_query($conn, "set names utf8");
?>