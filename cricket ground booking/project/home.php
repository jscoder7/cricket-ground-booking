<?php
$connection = mysqli_connect('localhost','root','','');
if(!$connection)
{ 
die("Connection Failed:" .mysqli_connect_error());
}
if(isset($_POST['save']))
{

$pname=$_POST["name"];
$age=$_POST["age"];
$email=$_POST["email"];
$number=$_POST["number"];
$type=$_POST["ptype"];
$query="insert into player values('$pname','$add1','$add2','$email','$numb',,'$ptype' )";
if(mysqli_query($connection,$query)){

}

}
mysqli_close($connection);
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="tor.css">
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #e3f2fd;>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="admin.php"><h3>WebSiteName</h3></a>
		</div>
	


    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php"><h3>Dashboard</h3></a>
</li>
      <li ><a href="tor.php"><h3>Tournament resgitration</h3></a></li>
      <li ><a href="bat.php"><h3>Batch registration</h3></a></li>
      <li ><a href="pla.php"><h3>Player registration</h3></a></li>
    </ul>
  </div>
</nav>
   <style>

</style>
</head>
<body>

<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>


</body>
</html>