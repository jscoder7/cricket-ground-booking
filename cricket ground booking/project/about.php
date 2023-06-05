<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
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
      <a class="navbar-brand" href="#"><h3>Cricket academy</h3></a>
    </div>
	

<ul class="nav navbar-nav">
      <li ><a href="home.php"><h3>Home</h3></a>
</li>
      <li ><a href="tor.php"><h3>Tournament resgitration</h3></a></li>
      <li ><a href="bat.php"><h3>Batch registration</h3></a></li>
      <li ><a href="pla.php"><h3>Player registration</h3></a></li>
	    <li class="active"><a href="about.php"><h3>About</h3></a></li>
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
	  <th>About</th>
        
    </thead>
    <tbody>
	<?php
	$count=1;
$query="SELECT * FROM about"; 
$result = mysqli_query($dbh,$query); 
while($row = mysqli_fetch_array($result)){?>


<td ><?php echo $row["text1"]; ?></td>
</tr>

<?php $count++;}?>
      </tbody>
  </table>
</div>


  
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="grd1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="grd2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="grd3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>