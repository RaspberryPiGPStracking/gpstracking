<?php
include('connect.php');
$number=$_REQUEST['mobile'];
$lati=$_REQUEST['lati'];
$longi=$_REQUEST['longi'];

$query="INSERT INTO track(phone,lati,longi) VALUES ('".$number."','".$lati."','".$longi."')";
// echo $query;
$result=mysqli_query($conn,$query);
	
mysqli_close($conn);
?>