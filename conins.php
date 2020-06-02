<html>
<head>
<style>
#bs
{
    background-image:url('k.jpg');
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
<body id="bs">
<div id="h"><br><br><center>Thank You for Your interest
in our shop.</center><br><br><center>We will reply to your query very soon on your given email-id or your registered mobile no.</center></div>
<?php
	
$fname=$_POST['fname'];
$email=$_POST['email'];
$msg=$_POST['msg'];


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dbcont');

$q="insert into contct(fullname,email,message)values('$fname','$email','$msg')";

mysqli_query($con,$q);
mysqli_close($con); 

?>
