<?php
require_once "../connection.php";
$ids = [];

$sql = "SELECT * FROM province";
$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
        array_push($ids, $row['id']);
    }
}

echo json_encode($ids);

?>