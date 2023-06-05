
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cricket academy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
   <script>
        // Ignore this in your implementation
        window.isMbscDemo = true;
    </script>

    <title>Mobile & Desktop usage</title>

    <!-- Mobiscroll JS and CSS Includes -->
    <link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
    <script src="js/mobiscroll.javascript.min.js"></script>
   <link rel="stylesheet" type="text/css" href="tor.css">
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
      <li class="active"><a href="bat.php"><h3>Batch registration</h3></a></li>
      <li ><a href="pla.php"><h3>Player registration</h3></a></li>
	  <li><a href="about.php"><h3>About</h3></a></li>
    </ul>
  </div>
</nav>
   

<script>
function add(){
var a,b,c;
a=Number(document.getElementById("wa").value);
b=Number(document.getElementById("ca").value);
d=Number(document.getElementById("1").value);

e=500*d;
c= a + b + e;
document.getElementById("answer").value= c;
}
</script>
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
  <form action="db3.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname"><h3>Name</h3></label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name.." class="input" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email"><h3>Phone number</h3></label>
    </div>
    <div class="col-75">
	<input type="text" id="phone" placeholder="Your number" name="number"
       pattern="[0-9]{10}"
       required>
      
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email"><h3>Email</h3></label>
    </div>
    <div class="col-75">
      <input type="text" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" id="email" name="email" placeholder="Your email" class="input" required>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="pt"><h3>Facility </h3></label>
    </div>
    <div class="col-75">
	<div class="checkbox">
  <label><input type="checkbox" value="500" name="check_list[]" id="wa">Water tank</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="600	" name="check_list[]" id="ca">Camera</label>
</div>

      
        
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pt"><h3>Net</h3></label>
    </div>
    <div class="col-75">
      <select id="pt" name="pt">
        <option value="1" name="pt" id="1">1</option>
        <option value="2" name="pt" id="1">2</option>
        <option value="3" name="pt" id="1">3</option>
		  <option value="4" name="pt" id="1">4</option>
		    
      </select>
    </div>
  </div>
<div class="row">
<div class="col-25">
      <label for="pt"><h3>Calender</h3></label>
    </div>
	<div class="col-75">
	 <input type="text" id="datepicker" name="date">
    
  </div>
</div>

	
<div class="row">
<div class="col-25">
      <label for="pt"><h3> </h3></label>
    </div>
	<div class="col-75">
	
<input type="hidden" id="answer" name="amount" >


</div>
  </div>


 
<center class="col-75">
    <input onclick="add()" type="submit" value="Submit"></center>
  </div>

  </form>
</div>

</body>
</html>