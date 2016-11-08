<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>GPS Tracking</title>
<link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body class="login">	
   
<h1 class="header">Tracking System</h1>
	<form action="login-post.php" method="post" id="login">
		<div class="group">
		   <input type="email" name="email" required><span class="highlight"></span><span class="bar"></span>
				    <label>User Email</label>
				  </div>
				  <div class="group">
				    <input type="password" name="pass" required><span class="highlight"></span><span class="bar"></span>
				    <label>Password</label>
				  </div>
				  <button type="submit" class="button buttonBlue" name="login">Login
				    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
				  </button>
				</form>
			</div>
		</div>
	</div>	
			
</body>
</html>
<?php unset($_SESSION['msg']);