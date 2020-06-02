<?php

$fname=$_POST['fname'];
$email=$_POST['email'];
$cont=$_POST['cont'];
$nation=$_POST['nation'];
$state=$_POST['state'];
$city=$_POST['city'];
$code=$_POST['code'];
$addr=$_POST['addr'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
echo "$email";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dbreg');

$q="insert into regp(fullname,email,contactno,nationality,state,city,postalcode,address,username,password)values('$fname','$email',$cont,'$nation','$state','$city',$code,'$addr','$uname','$pwd')";

mysqli_query($con,$q);
mysqli_close($con);
// if(!mysqli_query($con,$q))
// {
	// echo "Value Not Inserted";
// }
// else
// {
	// echo "Value Inserted";
// }

   	

?>