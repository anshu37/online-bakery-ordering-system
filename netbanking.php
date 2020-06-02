<html>
<head>
<style>
body
{
    background-image:url('g2.jpg');
    background-repeat:no repeat;
	background-size:cover;
}
main
{
	position:absolute;
	top:9%;
	left:50%;

}

input[type=text]
{
    width: 50%;
    padding: 12px 20px;  
    border: 2px solid #ccc;
    border-radius: 4px;
   
}
input[type=password]
{
    width: 20%;
    padding: 12px 20px;  
    border: 2px solid #ccc;
    border-radius: 4px;
   
}
input[type=number]
{
    width: 16%;
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
	background-color:grey;
	font-weight:bold;
	color:white;
}
label
{
	font-size:25px;
}

</style>
</head>
<body>
<img id="main" src="pay1.png" width="240px" height="100px"/>

<form action="" method="post">


<h1>Net Banking</h1>
<select>
<option>Allahabad Bank</option>
</select>
<input type="submit" value="Pay" id="btn"/>

</form>

</body>
</html>