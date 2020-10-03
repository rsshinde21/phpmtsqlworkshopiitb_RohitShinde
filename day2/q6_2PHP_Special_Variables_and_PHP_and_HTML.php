<html>
<body>
<form method="post">
      Name of the student:<input type="text" name="username"><br>
      Marks in Each Subject<br>
      Subject 1: <input type="number" name="Subject1" /><br>
      Subject 2: <input type="number" name="Subject2" /><br>
      Subject 3: <input type="number" name="Subject3" /><br>
      Subject 4: <input type="number" name="Subject4" /><br>
      Subject 5: <input type="number" name="Subject5" /><br>
      <input type="submit" value="Submit" />
</form>
</body>
</html>
<?php 
  if($_POST)
  {
  $Sub1 = $_POST["Subject1"]; 
  $Sub2 = $_POST["Subject2"];
  $Sub3 = $_POST["Subject3"];
  $Sub4 = $_POST["Subject4"];
  $Sub5 = $_POST["Subject5"];
   echo "Total marks obtained:";
   $Total = $Sub1+$Sub2+$Sub3+$Sub4+$Sub5;
   echo "Total marks\n";
   echo "$Total out of 500";
   echo "<br>";
   $percentage=($Total*100)/500;
   echo "Percentage=$percentage%";
  }
  ?>


