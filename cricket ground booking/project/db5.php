<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width,initalscale=1.0">
<title>Delete or update data</title>
</head>
<body >




<?php
$calende=$_POST["date"];
 
 
    $calender= date("Y-m-d", strtotime($calende));
$dbh=mysqli_connect('localhost','root','','cricket');
?>

<?php

$count=1;
$query="SELECT * FROM batch"; 
$result = mysqli_query($dbh,$query); 
while($row = mysqli_fetch_array($result)){


$cal= $row["email"]; 
if($calender == $cal)
{?>
	  <div class="alert alert-danger">
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
</div>
<?php}
}
?>

</body></html>






