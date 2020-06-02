var i=1;
window.setInterval(showImage, 6000);
function showImage()
{
 var image=document.getElementById("img1");
 switch(i)
 {
  case 1:
   image.src="t1.jpg";
   i=2;
   break;
  case 2:
   image.src="t12.jpg";
   i=3;
   break;
  case 3:
   image.src="t8.jpg";
   i=4;
   break;
 case 4:
   image.src="t10.jpg";
   i=5;
   break;
  case 5:
   image.src="t11.jpg";
   i=6;
   break;
  case 6:
   image.src="t13.jpg";
   i=7;
   break;  
 case 7:
   image.src="t14.jpg";
   i=8;
   break; 
 case 8:
   image.src="t16.jpg";
   i=9;
   break; 
 case 9:
   image.src="t17.jpg";
   i=10;
   break;    
  case 10:
   image.src="t1.jpg";
   i=1;
   break;
  }
}