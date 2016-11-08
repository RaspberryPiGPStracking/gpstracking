<?php
  include('connect.php');
  session_start();
if(isset($_POST['login']))
{
	$uname=$_POST['email'];
	$pass=$_POST['pass'];
	$query="SELECT * FROM login WHERE email = '".$uname."' AND pwd = '".$pass."' ";
	echo $query;
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result) == 1)
	{
		if ($emp=mysqli_fetch_array($result))
		{
			$_SESSION['login']['name']=$emp['name'];
			$_SESSION['login']['emp_email']=$emp['email'];
			$_SESSION['msg']['success']="Wellcome ".$_SESSION['login']['name'].", you have logged in successfully.";
			header("location:form.php");
		}
	}else
	{
		$_SESSION['msg']['error']="Invalid Username or Password.";
		header("location:".$_SERVER['HTTP_REFERER']."");
	}
}

mysqli_close($conn);
?>