<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width,initalscale=1.0">
<title>Delete or update data</title>
</head>
<body bgcolor="#CCFFFF" text="#660099">



<?php
$dbh=mysqli_connect('localhost','root','','cricket');
$calende=$_POST["date"];
 echo $facility;
 $calender= "2021-06-07";	

$query="SELECT * FROM batch"; 
$result = mysqli_query($dbh,$query); 
while($row = mysqli_fetch_array($result)){


$cal=$row["calender"];
if($calender == $cal)
{
	 echo"exist";
}

?>
</body>
</html>
