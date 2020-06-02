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

       $u="delete from orchids where id='".$b."'";
       mysqli_query($con,$u);
   
       echo '<script>alert("Record Deleted");</script>';
	 }  
	 else if($a=="snack")
	 {	 
	   $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'prodb');

       $u="delete from snack where id='".$b."'";
       mysqli_query($con,$u);
   
       echo '<script>alert("Record Deleted");</script>';
	 } 
     else if($a=="sweet")
	 {	 
	   $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'prodb');

       $u="delete from sweet where id='".$b."'";
       mysqli_query($con,$u);
   
       echo '<script>alert("Record Deleted");</script>';
	 }  
     else if($a=="combo")
	 {	 
	   $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'prodb');

       $u="delete from combo where id='".$b."'";
       mysqli_query($con,$u);
   
       echo '<script>alert("Record Deleted");</script>';
	 }  
     else 
	 {	 
	   $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'prodb');

       $u="delete from cakes where id='".$b."'";
       mysqli_query($con,$u);
   
       echo '<script>alert("Record Deleted");</script>';
	 }  	 
	
}	


?>