<!DOCTYPE HTML>
<html>
<head>
<title>New User Form</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="information">

<h1 class="header">Enter New User Details</h1>
	
<form action="user_details.php" method="post" id="details">

<div class="group">
<input type="text" name="name" required><span class="highlight"></span><span class="bar"></span>
<label>Your Name</label>
</div>

<div class="group">
<input type="number" name="phone_number" required><span class="highlight"></span><span class="bar"></span>
<label>Phone Number</label>
</div>

<div class="group">
<input type="text" name="vehicle_number" required><span class="highlight"></span><span class="bar"></span>
<label>Vehicle Number</label>
</div>		

<button type="submit" class="button buttonBlue" name="user_register">Submit
<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
</button>
</form>

</body>
</html>