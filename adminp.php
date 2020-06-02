<html>
<head>
<style>
#header
{
     position:absolute;
	 top:0%;
	 left:0%;
    
}
#bs
{
    background-image:url('k.jpg');
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
	 width:163px;
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
}
#ty
{
	color:blue;
	font-size:20px;
	font-weight:bold;
}	
#l
{
	position:absolute;
	top:48%;
	left:12%;
	font-size:120px;
	color:blue;
	text-shadow:2px 2px 2px yellow;
}
#ii
{
	position:absolute;
	top:96%;
	left:38%;
}

#kj
{
	position:absolute;
	top:29%;
	left:5%;
	font-weight:bold;
	font-size:25px;
}
</style>
</head>
<body id="bs">
<div id="kj"><a href="adchpwd.php">Change password</a></div>
<div id="header">
<img src="l2.jpg" height="120px" width="200px">
</div>
<div class="anshu"><img src="cb.jpg" height="120px" width="800px"></div>
<div id="drop">
<ul>
    <li><a href="addp.php" class="a1">Add Product</a></li>
	<li><a href="advieworder.php" class="a1" id="ab">View Orders</a></li>
	<li><a href="conview.php" class="a1">View Enquiry Message</a></li>
	<li><a href="admdelete.php" class="a1">Delete Product</a></li>
	<li><a href="admupdate.php" class="a1">Update Product</a></li>
	<li><a href="regview.php" class="a1">View Registered Users</a></li>
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
	if(isset($_SESSION["aid"]))
	{
	  $aid=$_SESSION["aid"];//fetches value from session_start
	  echo "Welcome ".$aid."!";
      echo "<br>";
      echo "<center>To</center>"; 	     	  
    }	  
	else
		header("location:adminlog.php");
		
		
?>
</div>
<div id="log">
<a id="ty" href="adlogout.php">LOG OUT</a>
</div>
<div id="ii"><img src="gifn.gif" height="250" width="250"></div>
</body>
</html>