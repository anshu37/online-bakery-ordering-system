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
	top:76%;
	left:12%;
}	
#w
{
	position:absolute;
	top:32%;
	left:4%;
	background-color:white;
	height:120%;
	width:90%;
}
#kl
{
	position:absolute;
	top:95%;
	left:4%;
	
}
input[type=text], select 
{
    width: 50%;
    padding: 12px 20px;  
    border: 2px solid #ccc;
    border-radius: 4px;
   
}
#bg
{
    border: 2px solid #ccc;
    border-radius: 5px;
	padding: 12px 29px;
	font-size:16px;
	background-color:firebrick;
	font-weight:bold;
	color:white;
}
	
</style>
</head>
<body id="bs">
<div id="w">

<form action="admdelete.php" method="POST">
<h2>&nbsp;&nbsp;Enter Category:</h2>
&nbsp;&nbsp;<input type="text" placeholder="Enter category" name="cs" required/>
<h2>&nbsp;&nbsp;Enter the product id whose record you want to delete:</h2>
&nbsp;&nbsp;<input type="text" placeholder="Enter the product id" name="ck" required/>
<br><br>&nbsp;&nbsp;<input type="submit" value="Delete" name="bt" id="bg"/>
</form>
</div>



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
if(isset($_POST["bt"]))
{
	
	 $a=$_POST['cs'];
	 $b=$_POST['ck'];
	 if($a=="protb")
	 {	 
	   $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'prodb');

       $u="delete from protb where id='".$b."'";
       mysqli_query($con,$u);
   
       echo '<script>alert("Record Deleted");</script>';
	 }  
	 else if($a=="orchids")
	 {	 
	   $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'prodb');

       $v="delete from orchids where oid='".$b."'";
       mysqli_query($con,$v);
   
       echo '<script>alert("Record Deleted");</script>';
	 }  
	 else if($a=="snack")
	 {	 
	   $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'prodb');

       $w="delete from snack where id='".$b."'";
       mysqli_query($con,$w);
   
       echo '<script>alert("Record Deleted");</script>';
	 } 
     else if($a=="sweet")
	 {	 
	   $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'prodb');

       $x="delete from sweet where sid='".$b."'";
       mysqli_query($con,$x);
   
       echo '<script>alert("Record Deleted");</script>';
	 }  
     else if($a=="combo")
	 {	 
	   $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'prodb');

       $y="delete from combo where cid='".$b."'";
       mysqli_query($con,$y);
   
       echo '<script>alert("Record Deleted");</script>';
	 }  
     else 
	 {	 
	   $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'prodb');

       $z="delete from cakes where id='".$b."'";
       mysqli_query($con,$z);
   
       echo '<script>alert("Record Deleted");</script>';
	 }  	 
	
}	


?>
 
</div>
<div id="log">
<a id="ty" href="adlogout.php">LOG OUT</a>
</div>

</body>
</html>