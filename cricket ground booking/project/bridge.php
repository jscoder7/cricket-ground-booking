
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script>
        // Ignore this in your implementation
        window.isMbscDemo = true;
    </script>

    <title>Mobile & Desktop usage</title>

    <!-- Mobiscroll JS and CSS Includes -->
    <link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
    <script src="js/mobiscroll.javascript.min.js"></script>
   <link rel="stylesheet" type="text/css" href="tor1.css">
</head>
<body style="height:1500px">
<?php

$name=$_POST["name"];
$net=$_POST["pt"];
$number=$_POST["number"];
$email=$_POST["email"];
$amount=$_POST["amount"];
 $facility1=$_POST["check_list"];
    $facility="";  
    foreach($facility1 as $chk1)  
       {  
          $facility.= $chk1.",";  
       }  
$calende=$_POST["date"];

 
    $calender = date("Y-m-d", strtotime($calende));
$pay=$_POST["amount"];
echo $calender;?>

<form action="PAYUMoney_form.php" method="POST">
<input type="hidden" name="firstname" value="<?php echo $name ?>" />
<input type="hidden" name="email" value="<?php echo $email ?>" />
<input type="hidden" name="phone" value="<?php echo $number ?>" />
<input type="hidden" name="amount" value="<?php echo $amount ?>" />
<input type="hidden" name="productinfo" value="<?php echo $name ?>" />
<?php
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
	$mail->Body = "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
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





$query1="insert into batch values('$name','$number','$email','$facility','$net','$calender','$pay')";

  if ($connection->query($query1) === TRUE) {?>
  <div class="alert alert-success">
    <?php echo $calender;?> is available. Your total is <?php echo $amount;?>.
  </div>
<?php } else {?>
  <div class="alert alert-warning">
  <strong>Warning!</strong> tm bere date haku bvc!!
</div>
<?php
}


mysqli_close($connection);
?>
<input  type="submit" value="Submit">
</form>
 </body>
</html>



