<html>
<head>
<title>Login page</title>
<link rel="stylesheet" type="text/css" href="login1.css">

<body>
   <div class="loginbox">
   <img src="icon.png" class="avatar">
      <h1>Login Here</h1>
	    <form>
		<p> Username</p>
		<input type="text" name="" placeholder="Enter Username">
		<p>Password</p>
		<input type="password" name="" placeholder="Enter Password"><br>
		
        <input type="submit" name="submit" value="login" ><br>	
            <a href="a">lost your password?</a>
            <a href="a">Dont have an account</a>			
		
		</form>
  </div>
</body>
</head>
</html>
<?php
	session_start();
if(isset($_SESSION['username']))
{
	header("location:welcomeadmin.php");
}


?>

<?php

if(isset($_POST['submit']))
{
 
 $username= $_POST['user'];
 $password= $_POST['pass'];
 

 $link=mysqli_connect("localhost","root","","project") or die($link); 
  $username =mysqli_real_escape_string($link,$username);
  $password =mysqli_real_escape_string($link,$password);

$result=mysqli_query($link,"select * from admin where id='$username' and password='$password'") or die("failed to query database".mysqli_error($link));
	
	if(mysqli_num_rows($result)>0)
	{
		session_start();
		$_SESSION["username"] = $username;
		if(!isset($_SESSION['username']))
		{	
		echo "<script>alert('Invalid ID or Password. You are in admin page if you are not admin then go to employee Login.')</script>";
		}
		else
		{
		  echo"<script>location.href='welcomeadmin.php'</script>";
		}
	}
	else
	{
		echo "<script>alert('Invalid ID or Password. You are in admin page if you are not admin then go to employee Login.')</script>";
	}
		
}
?>

