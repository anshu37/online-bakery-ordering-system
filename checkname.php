<?php
 $username=$_GET['uname'];
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'dbreg');
 $q="select username from regp where username='$username'";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
 if($row_count==1)
  echo "user hai";
 else
  echo "user nahi hai";
?>