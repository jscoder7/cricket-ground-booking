<?php
$pname=$_POST["pname"];
$age=$_POST["age"];
$email=$_POST["email"];
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "1by19mca22@bmsit.in";
//Set gmail password
	$mail->Password = "bmsit123";
//Email subject
	$mail->Subject = "Test email using PHPMailer";
//Set sender email
	$mail->setFrom('1by19mca22@bmsit.in');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "<h1>Sent Successfully! Thank you"." ".$pname.", We will contact you shortly!</h1>";
//Add recipient
	$mail->addAddress($email);
	$mail->addAddress('1by19mca22@bmist.in');
//Finally send email
	if ( $mail->send() ) {
		echo "THank you";
	}else{
		echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
	}
//Closing smtp connection
	$mail->smtpClose();
	
$connection = mysqli_connect('localhost','root','','cricket');
if($connection)
{ 
echo "data inserted successfully....!!!";

}


$number=$_POST["number"];
$type=$_POST["pt"];
echo $type;
$query="insert into player values('$pname','$age','$email','$number','$type')";
if(mysqli_query($connection,$query)){
echo "data inserted successfully....!!!";
}


mysqli_close($connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Player registration</title>
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
      <a class="navbar-brand" href="#"><h3>Cricket Academy</h3></a>
    </div>
	


<ul class="nav navbar-nav">
      <li ><a href="home.php"><h3>Dashboard</h3></a>
</li>	
      <li ><a href="tor.php"><h3>Tournament resgitration</h3></a></li>
      <li ><a href="bat.php"><h3>Batch registration</h3></a></li>
      <li class="active"><a href="pla.php"><h3>Player registration</h3></a></li>
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
  <form action="pla.php" method="POST">
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
      <input type="text" id="email" name="email" placeholder="Your email" class="input" required>
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
      <label for="pt"><h3>Playing role</h3></label>
    </div>
    <div class="col-75">
      <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1">
    <option name="pt" value="Batsman">Batsman</option>
    <option name="pt" value="Bowler">Bowler</option>
    <option name="pt" value="Wicket-Keeper">Wicket-Keeper</option>
    <option name="pt" value="All-Rounder">All-Rounder</option>
  </select>
</div>
		    
     
    </div>
  </div>
  
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>
