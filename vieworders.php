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
    left:5%;
	background-color:white;
    height:110%;
    width:90%;
	
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
	top:150%;
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
#bm	
{
	position:absolute;
    top:40%;
	left:20%;
}
#das1
{
	position:absolute;
    top:16%;
	left:85%;
	
}
#das2
{
	position:absolute;
    top:30%;
	left:85%;
	
}
#das3
{
	position:absolute;
    top:44%;
	left:85%;
	
}
#das4
{
	position:absolute;
    top:58%;
	left:85%;
	
}
#das5
{
	position:absolute;
    top:72%;
	left:85%;
	
}
#das6
{
	position:absolute;
    top:86%;
	left:85%;
	
}
#lj
{
	
   
	
	font-size:20px;
	font-weight:bold;
	color:crimson;
	
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


<div id="log">
	<a id="ty" href="logout.php">LOG OUT</a>
	</div>
<div id="bv"></div>	
<div id="bm">
<div id="das1"><img src="asd3.jpg" height="70" width="90"/></div>
<div id="das2"><img src="asd.jpg" height="70" width="90"/></div>
<div id="das3"><img src="aw.jpg" height="70" width="90"/></div>
<div id="das4"><img src="dd.jpg" height="70" width="90"/></div>
<div id="das5"><img src="p1.jpg" height="70" width="90"/></div>
<div id="das6"><img src="ts2.jpg" height="70" width="90"/></div>
<p id="lj">Your Orders Made are:</p>
<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'prodb');
$q="select*from cakes";

$res=mysqli_query($con,$q);

$num=mysqli_num_rows($res);

echo"<table border=1 cellpadding=25>
<tr><th>Product name</th><th>Product Description</th><th>Product Price</th><th>Image</th></tr>";
for($i=1;$i<=$num;$i++)
{
    $row=mysqli_fetch_array($res);
	
    echo"<tr>";
	echo"<td>$row[1]</td>
	     <td>$row[2]</td>
		 <td>$row[4]</td>";
     echo"<tr>";
	
}

echo"</table>";	
mysqli_close($con);


?>
</div>
</body>
</html>