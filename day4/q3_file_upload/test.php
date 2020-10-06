<?php

$target_dir="uploads/";
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);

echo print_r($_FILES["fileToUpload"])."<br>";
echo"<hr>";
echo basename($_FILES["fileToUpload"]["name"])."<br>";
echo"<hr>";
echo strtolower(pathinfo($target_file,PATHINFO_EXTENSION))."<br>";
echo"<hr>";
echo print_r(getimagesize($_FILES["fileToUpload"]["tmp_name"]))."<br>";




?>


