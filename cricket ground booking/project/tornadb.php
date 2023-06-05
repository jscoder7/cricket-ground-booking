
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
        // Ignore this in your implementation
        window.isMbscDemo = true;
    </script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
   
 

   
   
   <link rel="stylesheet" type="text/css" href="tor.css">
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #e3f2fd;>
  <div class="container-fluid">
    <div class="navbar-header">
      <li ><a href="home.php"><h3>Cricket academy</h3></a>
    </div>
	

<ul class="nav navbar-nav">
      <li ><a href="home.php"><h3>Dashboard</h3></a>
</li>
      <li class="active" ><a href="tornadb.php"><h3>Tournament resgistry</h3></a></li>
      <li ><a href="batchdb.php"><h3>Batch registry</h3></a></li>
      <li ><a href="pladb.php"><h3>Player registry</h3></a></li>
	  <li ><a href="admin.php"><h3>Signout</h3></a></li>
    </ul>
  </div>
</nav>
   <style>

</style>
</body>
<body>
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/>
<div class="container row-75 p-3 my-3 bg-light text-white ">
    
<?php
$dbh=mysqli_connect('localhost','root','','cricket');
?>  
<div clas="row">
  <table class="table table-hover">
    <thead>
      <tr>
	  <th>S.no</th>
        <th>Name</th>
        <th>number</th>
        <th>Email</th>
		<th>facility</th>
		<th>net</th>
		<th>date</th>
		<th>pay</th>
		
    </thead>
    <tbody>
	<?php
	$count=1;
$query="SELECT * FROM torna"; 
$result = mysqli_query($dbh,$query); 
while($row = mysqli_fetch_array($result)){?>

<tr><td ><?php echo $count; ?></td>
<td ><?php echo $row["name"]; ?></td>
<td ><?php echo $row["number"]; ?></td>
<td ><?php echo $row["email"]; ?></td>
<td ><?php echo $row["facility"]; ?></td>
<td ><?php echo $row["calender"]; ?></td>
<td ><?php echo $row["pay"]; ?></td>
</tr>

<?php $count++;}?>
      </tbody>
  </table>
</div>


  
</div>

</body>
</html>