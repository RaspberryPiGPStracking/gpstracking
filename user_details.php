<?php
  include('connect.php');
  session_start();
if(isset($_POST['user_register']))
{
$query="INSERT INTO user_details(name,phone_number,vehicle_number) VALUES ('".$_POST['name']."','".$_POST['phone_number']."','".$_POST['vehicle_number']."')";
echo $query;
	$result=mysqli_query($conn,$query);
	if($result==TRUE)
	{
		$_SESSION['msg']['error']="You have registered successfully.";
		header("location:existing.php");
	}else
	{
		$_SESSION['msg']['error']="Something went wrong please try again.";
		header("location:".$_SERVER['HTTP_REFERER']."");
	}
}

mysqli_close($conn);
?>

