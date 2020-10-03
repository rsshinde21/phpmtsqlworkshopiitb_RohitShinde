<html>  
<body>  
<form method="get">  
    Enter the 3 sides of triangle: <br>
    <input type="number" name="a"> <br> 
    <input type="number" name="b"> <br>  
    <input type="number" name="c"> <br>
    <input type="submit" value="Submit">
</form>  
</body>  
</html>
<?php 
 if($_GET)
  {
  $a = $_GET["a"]; 
  $b = $_GET["b"];
  $c = $_GET["c"];
 if 
 	($a==$b && $b==$c && $c==$a)
 	echo"It is equilateral triangle.";

 	elseif($a==$b || $b==$c || $c==$a)
 	echo"It is isoceles triangle.";

 	elseif($a*$a+$b*$b==$c*$c || $b*$b+$c*$c==$a*$a || $a*$a+$c*$c==$b*$b )
 	echo"It is right angled triangle.";

 	else
 	echo"It is scalene triangle.";
}
?>