<html>
<head>
<script type="text/javascript" src="adm.js"></script>
<style>
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
input[type=password], select 
{
    width: 150%;
    padding: 12px 6px;  
    border: 2px solid #ccc;
    border-radius: 4px;
   
}
#bt
{
    border: 2px solid #ccc;
    border-radius: 5px;
	padding: 12px 29px;
	font-size:16px;
	background-color:firebrick;
	font-weight:bold;
	color:white;
	cursor:pointer;
}
#mn
{
	position:absolute;
	top:27%;
	left:33%;
}
#bv
{
    position:absolute;
    top:29%;
    left:30%;
    height:75%;
    width:45%;
	background-color:white;
}
#message {
    display:none;
    background: #f1f1f1;
    position: relative;
    padding: 10px;
	top:65%;
	left:25%;
	height:30%;
	width:43%;
}
#message p {
    font-size: 18px;
}
.valid {
    color: green;
}

.valid:before {
    position: relative;
    
}


.invalid {
    color: red;
}

.invalid:before {
    position: relative;
      
}
#header
{
     position:absolute;
	 top:0%;
	 left:0%;
    
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
	 width:164px;
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
	top:130%;
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
  	
</style>
</head>	
<body id="bs">
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
<div id="bv"></div>
<div id="mn">

<form action="adchpwd.php" method="POST">
<br><h2>Change Your Password</h2>
<hr/><br>
<h3>Enter Your Old Password: </h3>
<pre><input type="password" placeholder="Enter old password" id="pi" name="opwd" onkeyup="checkname(this.value)"/>
<span id="spanmsg"></span></pre><br>
<input type="checkbox" onclick="myFunction()"/>Show Password

<h3>Enter Your New Password: </h3>
<input type="password" placeholder="Enter new password" name="npwd" id="psw" required/>
<br>
<input type="checkbox" onclick="myFuncti()"/>Show Password<br><br><br>
<input type="submit" id="bt" name="btn" value="Change Password"/>

</form>
</div>

  <script>
function myFunction() {
    var x = document.getElementById("pi");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
  <script>
function myFuncti() {
    var x = document.getElementById("psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

<div id="log">
	<a id="ty" href="adminlog.php">LOG OUT</a>
	</div>
<div id="errormsg"></div>
<?php
if(isset($_POST["btn"]))
{	
$opwd=$_POST['opwd'];
$npwd=$_POST['npwd'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'admindb');
	

$q="UPDATE admintb SET AdminPwd='$npwd' WHERE AdminPwd='$opwd' ";
$a=mysqli_query($con,$q);

echo '<script>alert("Password changed");</script>';
mysqli_close($con);
}

?>
</body>
</html>