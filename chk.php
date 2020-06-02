<html>
<head></head>
<body>
<?php

  

	$uname=$_POST['uname'];
	$con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'dbreg');
	$data=mysqli_query($con,"select username from regp where username='$uname'");
    $num=mysqli_fetch_array($data);
	
	if($num[0]==$uname)
	{
       echo "Username already exists";
    }
    else
    {
       echo "Username is available ";
    }
   

?>
</body>
</html>