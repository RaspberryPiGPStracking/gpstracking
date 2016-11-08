<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/bootstrap.min.css">

<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
</head>

<body class="information">

<h1 class="header" style="text-align: center;color: white">List of User</h1>
<div class="span1" style="text-align: center;margin-top: 50px">
<i class="icon-pencil icon-white"></i>
<span style="color:blue"><strong>Click on the button to select the list of users.</strong></span>

</a><br>
</div>
<form action="existing.php" method="post">
<div class=" col-md-6 col-md-offset-3">
<div class="group" id="dropdown-menu">
            <div class="sample">
              <div class="form-group">
                <!-- <label for="s1">Centre</label>  -->
                <select id="s1" class="form-control" name="user" required>
                  <option value="">Choose User</option>
                  <?php 
                  $qry="select * from user_details";
                  $res=mysqli_query($conn,$qry);
                  while($row=mysqli_fetch_array($res))
                  {
                  ?>
                   <option value="<?php echo $row['phone_number']; ?>"><?php echo $row['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

          </div>

          <button type="submit" class="button buttonBlue" name="track">Track User
              <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
          </button>
</div>
</form>


<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>