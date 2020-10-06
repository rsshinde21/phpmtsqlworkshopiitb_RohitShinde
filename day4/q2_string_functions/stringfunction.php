<!DOCTYPE html>
<html>

<body>
         Enter the string:
     	<form action="stringfunction.php" method="post">
     	<input type="text" name="string">
     	<input type="submit" value="submit"/>


</body>
</html>
<?php
$string=$_POST['string'];
   echo "<br>" .$string."<br>";

   echo"<br>No of character in string=".strlen($string);
  echo"<br>";
  echo"<br><br>broken string into array<br>";
 $arr1 = str_split($string);
 print_r($arr1);
 echo"<br>" ;
 
 echo"<br>Reverse string is<br>";
echo strrev($string);
 echo"<br>";
echo"<br>Convert all alphabets to lowercase<br>";
echo strtolower($string);
echo"<br>";

echo"<br>Convert all alphabets to uppercase<br>";
echo strtoupper($string);
    echo"<br>";
echo"<br>declare a substring and replace the count of substring into original string<br>";
$search="Pranav";
$result=strlen($search);
 echo "The count of substring is ".$result."<br>" ;
strlen($string)==$result;
echo"Replace count of substring is ";
echo $result;
?>