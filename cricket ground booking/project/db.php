<?php
if(isset($_POST['save']))
{
$pname=$_POST["pname"];
$age=$_POST["age"];
$email=$_POST["email"];
$number=$_POST["number"];
$type=$_POST["pt"];
}
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

if(isset($_POST['save']))
{	
$connection = mysqli_connect('localhost','root','','cricket');
if($connection)




echo $type;
$query="insert into player values('$pname','$age','$email','$number','$type')";
if(mysqli_query($connection,$query)){

}


mysqli_close($connection);
}

?>