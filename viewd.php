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
input[type=email], select 
{
    width: 50%;
    padding: 12px 6px;  
    border: 2px solid #ccc;
    border-radius: 4px;
   
}
#bv
{
    position:absolute;
    top:32%;
    left:7%;
    height:90%;
    width:86%;
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
	 width:194px;
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
#view
{
	position:absolute;
    top:52%;
    left:9%;
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
<div id="bv">
<form action="viewd.php" method="POST">
<h3>&nbsp;&nbsp;Please Enter Your email-id to view your details:</h3>
&nbsp;&nbsp;<input type="email" placeholder="Enter your email-id" name="email" title="enter your email as you mentioned in the time of your registration form"/>
<input type="submit" name="btn" id="bt" value="View"/>

</form>
</div>


<div id="view">
<?php
if(isset($_POST['email']))
{	
$email=$_POST['email'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dbreg');
$q="select*from regp where email='$email'";

$res=mysqli_query($con,$q);

$num=mysqli_num_rows($res);

for($i=1;$i<=$num;$i++)
{
    $row=mysqli_fetch_array($res);
	
    
    echo "<font color='blue'>Fullname:</font>"."&nbsp;"."&nbsp"."&nbsp;"."&nbsp;".$row[0];
	echo "<br>";	echo "<br>";
	echo "<font color='blue'>Email-id:</font>"."&nbsp;"."&nbsp"."&nbsp;"."&nbsp;".$row[1];
	echo "<br>";	echo "<br>";
	echo "<font color='blue'>Contact-no:</font>"."&nbsp;"."&nbsp"."&nbsp;"."&nbsp;".$row[2];
	echo "<br>"; 	echo "<br>";  
    echo "<font color='blue'>Nationality:</font>"."&nbsp;"."&nbsp"."&nbsp;"."&nbsp;".$row[3];
	echo "<br>";	echo "<br>";
	echo "<font color='blue'>State:</font>"."&nbsp;"."&nbsp"."&nbsp;"."&nbsp;".$row[4];
	echo "<br>";	echo "<br>";
	echo "<font color='blue'>City:</font>"."&nbsp;"."&nbsp"."&nbsp;"."&nbsp;".$row[5];
    echo "<br>";   	echo "<br>";
    echo "<font color='blue'>Postal Code:</font>"."&nbsp;"."&nbsp"."&nbsp;"."&nbsp;".$row[6];
	echo "<br>";	echo "<br>";
	echo "<font color='blue'>Address:</font>"."&nbsp;"."&nbsp"."&nbsp;"."&nbsp;".$row[7];
	echo "<br>";	echo "<br>";
	echo "<font color='blue'>UserName:</font>"."&nbsp;"."&nbsp"."&nbsp;"."&nbsp;".$row[8];

	 
	
}


mysqli_close($con);
}

?>
</div>
<div id="log">
<a id="ty" href="logout.php">LOG OUT</a>
</div>
</body>
</html>