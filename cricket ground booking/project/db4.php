
<!DOCTYPE html>

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

    <title>Mobile & Desktop usage</title>

    <!-- Mobiscroll JS and CSS Includes -->
    <link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
    <script src="js/mobiscroll.javascript.min.js"></script>
   <link rel="stylesheet" type="text/css" href="tor1.css">
</head>
<body style="height:1500px">
<?php

$name=$_POST["name"];
$number=$_POST["number"];
$email=$_POST["email"];
$facility1=$_POST["check_list"];
    $facility="";  
    foreach($facility1 as $chk1)  
       {  
          $facility.= $chk1.",";  
       }  
$net=$_POST["pt"];
$calende=$_POST["date"];
 echo $facility;
 
    $calender= date("Y-m-d", strtotime($calende));
$pay=$_POST["pay"];




$connection = mysqli_connect('localhost','root','','cricket');

$query="SELECT * FROM batch"; 
$result = mysqli_query($connection,$query); 
while($row = mysqli_fetch_array($result)){


$cal=$row["calender"];
if($calender == $cal)
{
	 echo"exist";
}








mysqli_close($connection);

?>

   
  
  
  </body>
</html>
