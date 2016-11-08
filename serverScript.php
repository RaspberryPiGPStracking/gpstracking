<?php
include('connect.php');


$query = "SELECT * FROM track WHERE phone='".$_GET['user']."'";
$result = mysqli_query($conn,$query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}




$data=[];
while ($row = @mysqli_fetch_assoc($result)){

  $post_data = array(
  'address' => array(
    'lat' => $row['lati'],
    'lng' => $row['longi'],
  ),
  'title' => $row['update_date'],
);
  array_push($data, $post_data);
}
echo json_encode($data);
?>