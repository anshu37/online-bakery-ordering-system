<html>
<head>
<style>
#header
{
     position:absolute;
	 top:0%;
	 left:0%;
    
}
.anshu
{
   
    position:absolute;
    top:0%;
	left:20%;
	opacity:0.8;
}

#bs
{
    background-image:url('k.jpg');
    background-repeat:no repeat;
	background-size:cover;
}
#drop
{
	  position:absolute;
	  top:19%;
	  left:0%;
	  z-index:1000;
}
.a1
{
     color:white;
     text-decoration:none;
}
ul
{
     margin:0px;
	 padding:0px;
	
	 
}
ul li
{
     background-color:purple;
	 border:1px solid white;
     list-style:none;
	 width:196px;
	 float:left;
	 line-height:30px;
	 text-align:center;
	 font-weight:bold;
	
}
ul li:hover
{
     background-color:magenta;
}
#footer #abc 
{
    position:absolute;
	top:10%;
    left:3%;
	color:white;
}
#footer #def 
{
    position:absolute;
	top:35%;
    left:3%;
	color:white;
}
#footer #fgh 
{
    position:absolute;
	top:63%;
    left:3%;
	color:white;
}
#footer #right 
{
    position:absolute;
	top:8%;
    left:88%;
	color:white;
}
#footer
{
	position:absolute;
	top:160%;
	left:0%;
	background-color:black;
	height:20%;
	width:100%;
}
#wi
{
    position:absolute;
	top:4%;
    left:46%;
}
h4
{
    
   color:white;
   position:absolute;
   top:45%;
   left:40%;
}
#log
{
	position:absolute;
	top:5%;
	left:88%;
	font-weight:bold;
}
#ty
{
    color:blue;
	font-size:20px;
}	
#l
{
	position:absolute;
	top:40%;
	left:29%;
	font-size:60px;
	color:blue;
	text-shadow:2px 2px 2px yellow;
}
#ii
{
	position:absolute;
	top:60%;
	left:36%;
}	
</style>
</head>
<body id="bs">
<div id="header">
<img src="l2.jpg" height="120px" width="200px">
</div>
<div class="anshu"><img src="cb.jpg" height="120px" width="800px"></div>
<div id="drop">
<ul>
    
	<li><a href="vieworders.php" class="a1" id="ab">View Your Orders</a></li>
	<li><a href="viewd.php" class="a1">View Your Details</a></li>
	<li><a href="cancelorder.php" class="a1">Cancel Order</a></li>
	<li><a href="changepwd.php" class="a1" target="blank">Change Password</a></li>
	<li><a href="recentview.php" class="a1">Recently Viewed Items</a></li>
</ul>
</div>
<div id="footer">
     <img id="wi" src="wa2.jpg" height="60" width="60">
     <h4>Copyright&copy;SweetTreats.com</h4>
	 <a href="howtoorder.html" id="abc">How To Order</a><br>
	 <a href="terms.html" id="def">Terms And Conditions</a><br>
	 <a href="contact.html" id="fgh">Contact Us</a>
	 <b id="right">Design by:<br><br>Anshu<br>Samreen<br>Rudra</b>
 </div>
 <div id="l">
<?php
	session_start();
	if(isset($_SESSION["user"]))
	{
	  $user=$_SESSION["user"];//fetches value from session_start
	  echo "Welcome ".$user."!"; 
	  echo "<br>";
      echo "<center>To</center>"; 	  
    }	  
	else
		header("location:logup.php");
		
		
?>
</div>
<div id="ii"><img src="gifn.gif" height="150" width="250"></div>
	<div id="log">
	<a id="ty" href="logout.php">LOG OUT</a>
	</div>
	</body>     
	</html>