
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="dp.js"></script>
	<link rel="stylesheet" type="text/css" href="dp.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script>
			$(function() {
			$('.dates #usr1').datepicker({
				'format': 'yyyy-mm-dd',
				'autoclose': true
			});
		});
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
      <a class="navbar-brand" href="#"><h3>WebSiteName</h3></a>
    </div>
	


    <ul class="nav navbar-nav">
      <li ><a href="home.php"><h3>Dashboard</h3></a>
</li>
      <li ><a href="tor.php"><h3>Tournament resgitration</h3></a></li>
      <li class="active"><a href="bat.php"><h3>Batch registration</h3></a></li>
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
      <input type="text" id="number" name="number" placeholder="Your number" class="input" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email"><h3>Email</h3></label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email" class="input" required>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="pt"><h3>Facility </h3></label>
    </div>
    <div class="col-75">
	<div class="checkbox">
  <label><input type="checkbox" value="Water tank" name="check_list[]">Water tank</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Camera" name="check_list[]">Camera</label>
</div>

      
        
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pt"><h3>Net</h3></label>
    </div>
    <div class="col-75">
      <select id="pt" name="pt">
        <option value="1" name="pt">1</option>
        <option value="2" name="pt">2</option>
        <option value="3" name="pt">3</option>
		  <option value="4" name="pt">4</option>
		    
      </select>
    </div>
  </div>
<div class="row">
<div class="col-25">
      <label for="pt"><h3>Calender</h3></label>
    </div>
	<div class="col-75">
	 <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

        </section>
    
  </div>
</div>
	</div>
	</div>
<div class="row">
<div class="col-25">
      <label for="pt"><h3>Payment </h3></label>
    </div>
	<div class="col-75">
	<div class="radio">
  <label><input type="radio" name="pay" Checked>Debit card</label>
</div>
<div class="radio">
  <label><input type="radio" name="pay">Credit card</label>
</div>


</div>
  </div>


  <div class="row" class="col-75">
    <input type="submit" value="Submit">
  </div>
  </div>
   
  </form>
</div>
<script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
</body>
</html>