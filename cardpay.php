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
<img src="pay.jpg" height="300px" id="l"/>
<center><h2>Thank You for Your Order.</h2>
<h2>Your transaction is successfully completed.</h2> </center>
<?php
    $a=$_POST["ct"];
	$b=$_POST["cn"];
    $c=$_POST["cm"];
    $d=$_POST["cy"];
	
	session_start();
	$user=$_SESSION["user"];
	$con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'dbreg');

    $q="insert into card(cardno,cardname,month,year,uname)values($a,'$b',$c,$d,'$user')";
    mysqli_query($con,$q);


    mysqli_close($con);

?>
</body>
</html>