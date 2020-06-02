<html>
<head>
<style>
#l
{
	position:absolute;
	top:30%;
	left:30%;
}
h2
{
   font-weight:bold;
   font-size:25px;
  
}  
body
{
	background-image:url('g2.jpg');
    background-repeat:no repeat;
	background-size:cover;
}	
</style>
</head>
<body>
<img src="cash.jpg" height="300px" id="l"/>
<center><h2>Thank You for Your Order.</h2>

<h2>Your Order is successful for Cash On Delivery basis.</h2> </center>
<?php
    $a=$_POST['d'];

	
	session_start();
	$user=$_SESSION["user"];
	$con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'dbreg');

    $q="insert into cash(uname,saddress)values('$a','$user')";
    mysqli_query($con,$q);


    mysqli_close($con);

?>
</body>
</html>