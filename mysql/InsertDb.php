<?php
$con = mysqli_connect("localhost","root","","test");
//Check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to Mysql: " . mysqli_connect_error();
}

$sql = "INSERT INTO Persons(Firstname, Lastname, Age)" .
		"VALUES" .
		"('$_POST[firstname]', '$_POST[lastname]', '$_POST[age]')";

if(!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);

?>