<?php
session_start();
require_once "../connection.php";

$search = $_POST['search'];

$sql = "SELECT * FROM district WHERE district LIKE '%".$search."%'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        $_SESSION['district'] = $row['district'];
        $_SESSION['created'] = $row['addeddate'];
        $_SESSION['updated'] = $row['updatedate'];
        $_SESSION['status'] = $row['status'];
        echo $_SESSION['addeddate'];
        // header("location: view_district.php");
    }
}
else{
    $_SESSION['noData'] = "No results";
    // echo $_SESSION['noData'];
    header("location: district.php");
}
?>