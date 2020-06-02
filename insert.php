<html>
<head>
<style>
#bs
{
    background-image:url('cb.jpg');
    background-repeat:no repeat;
	background-size:cover;
	
} 
#h
{
	position:absolute;
	top:25%;
	left:32%;
	font-weight:bold;
	color:white;
	background-color:black;
	height:320px;
	width:420px;
	opacity:0.8;
	font-size:20px;
	
}	
	
</style>
</head>
<body id="bs">
<div id="h"><br><br><center>Your form has been successfully submitted.</center><br><br><center>Thank You for Your interest
in our shop.</center><br><br><center>You can further Log In to manage Your Account.</center></div>
<?php

$fname=$_POST['fname'];
$email=$_POST['email'];
$cont=$_POST['cont'];
$state=$_POST['state'];
$city=$_POST['city'];
$code=$_POST['code'];
$addr=$_POST['addr'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];

session_start();

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dbreg');

$q="insert into regp(fullname,email,contactno,state,city,postalcode,address,username,password)values('$fname','$email',$cont,'$state','$city',$code,'$addr','$uname','$pwd')";

mysqli_query($con,$q);


mysqli_close($con);

?>
</body>
</html>