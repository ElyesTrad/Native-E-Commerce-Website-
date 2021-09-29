<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "e_commerce";

$conn= mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
if (!$conn){
    die("connection failed :" . mysqli_connect_error());
}
