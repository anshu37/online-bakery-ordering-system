<!DOCTYPE html>
<html>
<head>
<style>	
#bs
{
    background-image:url('bcd.jpg');
    background-repeat:no repeat;
	background-size:cover;
}
.anshu
{
   
    position:absolute;
    top:0%;
	left:20%;
	opacity:0.8;
}
#main
{
   position:absolute;
   top:28%;
   left:30%; 
   width:44%;
   background-color:white;
} 
#i1
{
   position:absolute;
  left:32%;

}
#subc
{
   background-color:grey;
   position:absolute;
   top:10%;
   left:21%;
   height:87%;
   width:62%;  
   opacity:0.8;   
   
} 
input[type=text], select 
{
    width: 76%;
    padding: 12px 6px;  
    border: 2px solid #ccc;
    border-radius: 4px;
   
}
input[type=password], select 
{
    width: 76%;
    padding: 12px 6px;  
    border: 2px solid #ccc;
    border-radius: 4px;
   
}
#btn
{
    border: 2px solid #ccc;
    border-radius: 5px;
	padding: 12px 29px;
	font-size:16px;
	background-color:firebrick;
	font-weight:bold;
	color:white;
}
#btn:hover 
{
    cursor:pointer;
	opacity:0.8;
}

a:link
{
  color:red;
}  

  
</style>	 
</head>
<body id="bs">

<form action="adminlog.php" method="POST">

<div id="subc"><img id="i1" src="regp2.png" height="120" width="200"></div>
<div id="main">

<h2>&nbsp;&nbsp;Admin Log In</h2>
<hr></hr>


<h3>&nbsp;&nbsp;UserName: </h3>    
&nbsp;&nbsp;<input type="text" placeholder="Enter user name" name="aid" required/>

<h3>&nbsp;&nbsp;Password: </h3>    
&nbsp;&nbsp;<input type="password" placeholder="Enter password" id="pw" name="pid" required/><br>
&nbsp;&nbsp;<input type="checkbox" onclick="myFunction()"/>Show Password
<br><br>
&nbsp;&nbsp;<input type="Submit" id="btn" name="buttn" value="Log In" />&nbsp;&nbsp;&nbsp;&nbsp;<br><br>


</div>
</form>

  <script>
function myFunction() {
    var x = document.getElementById("pw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>


<?php
	if(isset($_POST["buttn"]))
	{
		$aid=$_POST["aid"];
		$pid=$_POST["pid"];
		session_start();
	    $con=mysqli_connect("localhost","root","","admindb");
	    if(!$con)	
		     die("cannot connect to server");
		else
		{
		   $sql="select * from admintb where AdminId='".$aid."' and AdminPwd='".$pid."'";
		   $rs=mysqli_query($con,$sql);
		   $row=mysqli_fetch_array($rs);
		   if($row)
		   {
			 $_SESSION["aid"]=$aid;//stores userid in session
			 $_SESSION["pid"]=$pid;
			 header("location:adminp.php");
		   }
		   else
			 echo"invalid adminid/password";
		}
	}
?>
		
</body>
</html>