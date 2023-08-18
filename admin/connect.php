<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "web1";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Không thể kết nối");

mysqli_query($conn,"SET NAMES 'UTF8'");
?>