<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '9535@D';
   $dbname = 'gps_tracking';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
?>