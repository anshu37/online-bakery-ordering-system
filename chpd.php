<?php
 $password=$_GET['opwd'];
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'dbreg');
 $q="select password from regp where password='$password'";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
 if($row_count==1)
  echo "user hai";
 else
  echo "user nahi hai";
?>