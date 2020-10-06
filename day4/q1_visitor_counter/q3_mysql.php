<html><html>
	<form action="q3_mysql.php" method="POST">
		Name: <input type="text" name="name"><br/><br/>
		Please enter your marks below<br/><br/>
		Subject1: <input type="text" name="mk1"><br/><br/>
		Subject2: <input type="text" name="mk2"><br/><br/>
		Subject3: <input type="text" name="mk3"><br/><br/>
		Subject4: <input type="text" name="mk4"><br/><br/>
		Subject5: <input type="text" name="mk5"><br/><br/>
		<input type="submit">
	</form>
</html</html>
<?php
$con=mysqli_connect('localhost','root','','MyDB');

$sql='SELECT * from tbl_visitor';

$res=mysqli_query($con,$sql);

$row=mysqli_fetch_array($res);

$str=$row[0];

$length=strlen($str);

if($length==1)
 $counter="00000000".$row[0];
else if($length==2)
 $counter="0000000".$row[0];
else if($length==3)
 $counter="000000".$row[0]; 
else if($length==4)
 $counter="00000".$row[0];
else if($length==5)
 $counter="0000".$row[0];
else if($length==6)
 $counter="000".$row[0];
else if($length==7)
 $counter="00".$row[0];
else if($length==8)
 $counter="0" .$row[0];

$up_count=$row[0]+1; 
$sql="UPDATE `tbl_visitor` SET `count`= '$up_count' WHERE 1";

mysqli_query($con,$sql);

?>

<div class='row' style='margin-left:10px;margin-top:20px'>
 <div cass='col-4'>
  <h5 class='text-danger'>Total Visits</h5>
 </div>
 <div class='col-8'>
  <table class='text-white bg-info table-sm'> 
   <tr>
      <td style='border:1px solid yellow'><?php echo $counter[0] ?></td>
      <td style='border:1px solid yellow'><?php echo $counter[1] ?></td>
      <td style='border:1px solid yellow'><?php echo $counter[2] ?></td>
      <td style='border:1px solid yellow'><?php echo $counter[3] ?></td>
      <td style='border:1px solid yellow'><?php echo $counter[4] ?></td>
      <td style='border:1px solid yellow'><?php echo $counter[5] ?></td>
      <td style='border:1px solid yellow'><?php echo $counter[6] ?></td>
      <td style='border:1px solid yellow'><?php echo $counter[7] ?></td>
      <td style='border:1px solid yellow'><?php echo $counter[8] ?></td>
    </tr>
  </table>
 </div>
</div>
$conn= mysqli_connect("localhost","root","","result")  ;
 if(!$conn)
 {die("connection filed!" .mysqli_connect_error());
 }

$id = 0;
if (isset($_POST['name'], $_POST['mk1'], $_POST['mk3'], $_POST['mk4'], $_POST['mk5']))
{
        $id;
	$a = $_POST['name'];
	$sub1 = $_POST['mk1'];
	$sub2 = $_POST['mk2'];
	$sub3 = $_POST['mk3'];
	$sub4 = $_POST['mk4'];
	$sub5 = $_POST['mk5'];
	$totalmks = 500;
	$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
	$p = ($total/500) * 100;
	if ($a && $sub1 && $sub2 && $sub3 && $sub4 && $sub5){
		echo "<br/><br/>";
		echo "Name of Student: ".$a."<br/>";
		echo "Marks in Each Subject: <br/><br/>";
		echo "Subject 1: ".$sub1."<br/>";
		echo "Subject 2: ".$sub2."<br/>";
		echo "Subject 3: ".$sub3."<br/>";
		echo "Subject 4: ".$sub4."<br/>";
		echo "Subject 5: ".$sub5."<br/><br/>";
		echo "Total Marks Obtained: ".$total."<br/>";
		echo "Total Marks: ".$totalmks."<br/>";
		echo "Percentage: ".$p."<br/>";
		$sq1 = "INSERT INTO class1 VALUES('$id', '$a','$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$total', '$totalmks', '$p')";



		if(mysqli_query($conn,$sq1))
              	{
                echo"new record added";
               }
                    else
                    {
                      echo"error!".$sq1 ."<br>".mysqli_error($conn);
                    }



 }


        }
?>
