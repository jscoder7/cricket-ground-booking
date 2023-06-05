
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cricket academy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="p.css">
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #e3f2fd;>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><h3>Cricket academy</h3></a>
    </div>
	


<ul class="nav navbar-nav">
      <li ><a href="home.php"><h3>Home</h3></a>
</li>	
      <li ><a href="tor.php"><h3>Tournament resgitration</h3></a></li>
      <li ><a href="bat.php"><h3>Batch registration</h3></a></li>
      <li class="active"><a href="pla.php"><h3>Player registration</h3></a></li>
	    <li ><a href="about.php"><h3>About</h3></a></li>
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
<div class="container row-75">
  <form action="db.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname"><h3>Name</h3></label>
    </div>
    <div class="col-75">
      <input type="text" id="pname" name="pname" placeholder="Your name.." class="input" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname"><h3>Age</h3></label>
    </div>
    <div class="col-75">
      <input type="text" id="" name="age" placeholder="Your age" class="input" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email"><h3>Email</h3></label>
    </div>
    <div class="col-75">
      <input type="text" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" id="email" name="email" placeholder="Your email" class="input" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email"><h3>Phone number</h3></label>
    </div>
    <div class="col-75">
      <input type="text" pattern="[6789][0-9]{9}" id="number" name="number" placeholder="Your number" class="input" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pt"><h3>Playing role</h3></label>
    </div>
    <div class="col-75">
      <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" name="pt">
    <option name="pt" value="Batsman">Batsman</option>
    <option name="pt" value="Bowler">Bowler</option>
    <option name="pt" value="Wicket-Keeper">Wicket-Keeper</option>
    <option name="pt" value="All-Rounder">All-Rounder</option>
  </select>
</div>
		    
     
    </div>
  </div>
  
  <div class="row">
    <input type="submit" value="Submit" name="save">
  </div>
  </form>
</div>

</body>
</html>

            