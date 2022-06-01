<?php
$username="root";
$servername="localhost";
$password="";
$db="db";

$conn=new mysqli($servername,$username,$password,$db);
$sql="DELETE From employee WHERE Id =20";
if($conn->query($sql)===True)
{
	echo"Record Deleted  Successfully";
}
else
{
	echo"Error";
}

$conn->close();
?>
