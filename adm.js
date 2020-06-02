function checkname(str)
{

 str=str.trim();
 if(str.length==0)
 {
     document.getElementById("spanmsg").style.color="blue";
	 document.getElementById("spanmsg").innerHTML="Write old password...";
 }
 else
 {
 
  var req= new XMLHttpRequest();
  req.open("get","http://localhost/project/checkadpwd.php?opwd="+str,true);
  req.send();
  req.onreadystatechange=function(){
   if(req.status==200 && req.readyState==4)
   {
    if((req.responseText)=="user hai")
	{
	 document.getElementById("spanmsg").style.color="red";
	 document.getElementById("spanmsg").innerHTML="Password matched";
	}
	else 
	{
	 document.getElementById("spanmsg").style.color="green";
	 document.getElementById("spanmsg").innerHTML="Password is not matched!!!";
	}
   }
  }
 }
}