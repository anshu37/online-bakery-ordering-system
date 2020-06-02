<html>
<head>
<script type="text/javascript" src="cpwd.js"></script>
<style>
#bs
{
    background-image:url('k.jpg');
    background-repeat:no repeat;
	background-size:cover;
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
    height:70%;
    width:45%;
	background-color:white;
}
#message {
    display:none;
    background: #f1f1f1;
    position: relative;
    padding: 10px;
	top:96%;
	left:30%;
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
	 width:190px;
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
.anshu
{
   
    position:absolute;
    top:0%;
	left:20%;
	opacity:0.8;
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
<div id="bv"></div>
<div id="mn">

<form action="changepwd.php" method="POST">
<br><h2>Change Your Password</h2>
<hr/><br>
<h3>Enter Your Old Password: </h3>
<pre><input type="password" placeholder="Enter old password" name="opwd" onkeyup="checkname(this.value)"/>
<span id="spanmsg"></span></pre>

<h3>Enter Your New Password: </h3>
<input type="password" placeholder="Enter new password" name="npwd" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
<br><br><br>
<input type="submit" id="bt" name="btn" value="Change Password"/>

</form>
</div>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div><br><br>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
} 
</script>
<div id="log">
	<a id="ty" href="logout.php">LOG OUT</a>
	</div>
<div id="errormsg"></div>
<?php
if(isset($_POST["btn"]))
{	
$opwd=$_POST['opwd'];
$npwd=$_POST['npwd'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dbreg');
	

$q= "UPDATE regp SET password='$npwd' WHERE password='$opwd' ";
$a=mysqli_query($con,$q);

echo '<script>alert("Password changed");</script>';
 mysqli_close($con);
}

?>
</body>
</html>