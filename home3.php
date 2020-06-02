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
	top:29%;
	left:3%;
	font-size:25px;
	color:blue;
	font-weight:bold;
	text-shadow:2px 2px 2px yellow;
}
#lk
{
	position:absolute;
	top:55%;
	left:68%;
	font-size:25px;
	color:firebrick;
	font-weight:bold;
	background-color:lightgrey;
	
}
#ii
{
	position:absolute;
	top:96%;
	left:38%;
}
#g
{
	position:absolute;
	top:27%;
	left:2%;
	background-color:white;
	height:124%;
	width:96%;
}
#sw
{
	position:absolute;
	top:44%;
	left:64%;
	font-weight:bold;
	font-size:24px;

}
#sz
{
	position:absolute;
	top:43%;
	left:3%;
	font-weight:bold;
	font-size:24px;

}
#k
{
	position:absolute;
	top:50%;
	left:3%;
	font-weight:bold;
	font-size:24px;

}
input[type=text], select 
{
    width: 100%;
    padding: 12px 20px;  
    border: 2px solid #ccc;
    border-radius: 4px;
   
}
input[type=textarea], select 
{
    width: 100%;
   
    padding: 12px 20px;  
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
#im
{
	position:absolute;
	top:70%;
	left:65%;
}
</style>
</head>
<body id="bs">
<div id="g"></div>
<div id="sw">Deliver to my registered address:</div>
<div id="sz">
Deliver to new address:</div>
<div id="k">
<form action="cardpay2.php" method="POST">
<input type="textarea" rows="6" cols="39" placeholder="Enter your shipping address" name="d"/>
<br><br>

<input type="submit" value="Cash On Delivery" id="btn"/>
</form>
</div>

<div id="l">
<?php
	session_start();
	if(isset($_SESSION["user"]))
	{
	 
	  $user=$_SESSION["user"];//fetches value from session_start
	  echo "Welcome ".$user."!"; 

    }	  
	else
		header("location:log1.php");
		
		
?>
</div>
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
	 <a href="howtoorder.html" id="abc">How to Order</a><br>
	 <a href="terms.html" id="def">Terms And Conditions</a><br>
	 <a href="contact.html" id="fgh">Contact Us</a>
	 <b id="right">Design by:<br><br>Anshu<br>Samreen<br>Rudra</b>
 </div>
 
<div id="lk">

<?php
	
	$con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'dbreg');
	   
	  $user=$_SESSION["user"];//fetches value from session_start
	 
	  $a="SELECT * FROM regp where username='$user'";
      $result = mysqli_query($con,$a);
	  $num=mysqli_num_rows($result);
        
	  	  for($i=1;$i<=$num;$i++)
          {
               $row=mysqli_fetch_array($result);
	           echo"$row[6]";

          }		
?>

</div>


	<div id="log">
	<a id="ty" href="logout.php">LOG OUT</a>
	</div>
	</body>     
	</html>