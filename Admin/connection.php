<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nepal-location";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("error".mysqli_connect_error());
}
else{
    // echo "database connected successfully";
}
?>