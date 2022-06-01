<?php
$username="root";
$servername="localhost";
$password="";
$db="db";

$conn=new mysqli($servername,$username,$password,$db);
$sql="INSERT INTO employee (Id,Name,Email,Salary) VALUES ('20','Shankar','ss8776532@gmail.com','30000')";
if($conn->query($sql)===True)
{
	echo"Record Inserted Successfully";
}
else
{
	echo"Error";
}

$conn->close();
?>
