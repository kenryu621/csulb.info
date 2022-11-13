<?php
#phpinfo();
$con = mysqli_connect('localhost:3308','root','root','csulb');

// get the post records
$txtEmail = $_POST['txtEmail'];
// echo $txtEmail;
$txtPassword = $_POST['txtPassword'];
// echo $txtPassword;

// database insert SQL code
$sql = "INSERT INTO `userdata` (`email`, `password`) VALUES ('$txtEmail', '$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Userdata Records Inserted";
}

?>