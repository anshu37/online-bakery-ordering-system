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
	top:164%;
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
#akq
{
	position:absolute;
	top:29%;
	left:5%;
	background-color:white;
	height:132%;
	width:90%;
}
#s
{
	position:absolute;
	left:5%;
}
input[type=text], select 
{
    width: 120%;
    padding: 12px 20px;  
    border: 2px solid #ccc;
    border-radius: 4px;
   
}
textarea
{  
    border: 2px solid #ccc;
    border-radius: 5px;
	width:120%;
   
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
}
#bt:hover 
{
    cursor:pointer;
	opacity:0.8;
}
</style>
</head>
<body id="bs">
<div id="akq"><div id="s"><form action="addp.php" method="POST" enctype="multipart/form-data">
<h2>Category:</h2><input type="text" name="category" required/><br>
<h2>Product Id:</h2><input type="text" name="id" required/><br>
<h2>Product Name:</h2><input type="text" name="pname" required/><br>
<h2>Description:</h2><textarea rows="10" cols="55" placeholder="Enter the description" name="des" required></textarea><br>
<h2>Image:</h2><input type="file" name="file" required/><br>
<h2>Price:</h2><input type="text" name="price" required/><br><br>
 <input type="submit" value="Submit" name="btn" id="bt"/> 
</form></div></div>
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


<?php
if(isset($_POST["btn"]))
{
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'prodb');
 $category=$_POST['category'];
 $id=$_POST['id'];
 $name=$_POST['pname'];
 $des=$_POST['des'];
 $f=$_FILES["file"]["name"];
 $t=$_FILES["file"]["tmp_name"];
 $price=$_POST['price'];
 if($category=="protb")
 {	 
  $path="C:/xampp/htdocs/project/uploads/".$f;
  $dbpath="uploads/".$f;
  move_uploaded_file($t,$path);
  $q="insert into protb(id,name,des,pics,price)values('$id','$name','$des','$dbpath',$price)";

   mysqli_query($con,$q);
 
   echo '<script>alert("Product Added");</script>';
 }
 else if($category=="orchids")
 {
  $patho="C:/xampp/htdocs/project/orchid/".$f;
  $dbpatho="orchid/".$f;
  move_uploaded_file($t,$patho);
  $s="insert into orchids(oid,name,des,pics,price)values('$id','$name','$des','$dbpatho',$price)";

  mysqli_query($con,$s);
 
  echo '<script>alert("Product Added");</script>';
 }	
 else if($category=="sweet")
 {
  $paths="C:/xampp/htdocs/project/sweets/".$f;
  $dbpaths="sweets/".$f;
  move_uploaded_file($t,$paths);
  $sw="insert into sweet(sid,sname,sdes,pics,price)values('$id','$name','$des','$dbpaths',$price)";

  mysqli_query($con,$sw);
 
  echo '<script>alert("Product Added");</script>';
 }
 else if($category=="combo")
 {
  $pathc="C:/xampp/htdocs/project/combo/".$f;
  $dbpathc="combo/".$f;
  move_uploaded_file($t,$pathc);
  $c="insert into combo(cid,cname,cdes,pics,price)values('$id','$name','$des','$dbpathc',$price)";

  mysqli_query($con,$c);
 
  echo '<script>alert("Product Added");</script>';
 }	 
 else if($category=="snack")
 {
  $pathsn="C:/xampp/htdocs/project/snack/".$f;
  $dbpathsn="snack/".$f;
  move_uploaded_file($t,$pathsn);
  $sn="insert into snack(id,name,des,pics,price)values('$id','$name','$des','$dbpathsn',$price)";

  mysqli_query($con,$sn);
 
  echo '<script>alert("Product Added");</script>';
 }
 else 
 {
  $pathck="C:/xampp/htdocs/project/cakes/".$f;
  $dbpathck="cakes/".$f;
  move_uploaded_file($t,$pathck);
  $ck="insert into cakes(id,name,des,pics,price)values('$id','$name','$des','$dbpathck',$price)";

  mysqli_query($con,$ck);
 
  echo '<script>alert("Product Added");</script>';
 } 
  
 
 


 

 mysqli_close($con);
}

?>

<div id="log">
<a id="ty" href="adlogout.php">LOG OUT</a>
</div>

</body>
</html>