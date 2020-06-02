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
#bl
{
	color:white;
	font-size:27px;
}	
</style>	 
</head>
<body id="bs">

<form action="logup.php" method="POST">

<div id="subc"><img id="i1" src="regp2.png" height="120" width="200"></div>
<div id="main">

<h2>&nbsp;&nbsp;User Log In</h2>
<hr></hr>


<h3>&nbsp;&nbsp;UserName: </h3>    
&nbsp;&nbsp;<input type="text" placeholder="Enter user name" name="uname" required/>

<h3>&nbsp;&nbsp;Password: </h3>    
&nbsp;&nbsp;<input type="password" placeholder="Enter password" id="pw" name="pwd" required/>
<br>
&nbsp;&nbsp;<input type="checkbox" onclick="myFunction()"/>Show Password
<br><br>
&nbsp;&nbsp;<input type="Submit" id="btn" name="buttn" value="Log In" /><br><br>



</div>

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
<div id="bl">
<?php
	if(isset($_POST["buttn"]))
	{
		$user=$_POST["uname"];
		$pass=$_POST["pwd"];
		session_start();
	    $con=mysqli_connect("localhost","root","","dbreg");
	    if(!$con)	
		     die("cannot connect to server");
		else
		{
		   $sql="select * from regp where username='".$user."' and password='".$pass."'";
		   $rs=mysqli_query($con,$sql);
		   $row=mysqli_fetch_array($rs);
		   if($row)
		   {
			 $_SESSION["user"]=$user;//stores userid in session
			 $_SESSION["pass"]=$pass;
			 header("location:home.php");
		   }
		   else
			 echo"invalid userid/password";
		}
		 
	}
?>
</div>		
</body>
</html>