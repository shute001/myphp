<?php
//Create connection
$con = mysqli_connect("localhost","root","","test");

//Check connection
if(mysqli_connect_errno($con))
{
	echo "Failed to connect to mysql: " . mysqli_connect_error();
}
else
{
	echo "Connect to mysql successful!<br>";
}

//Create database
/*$sql="CREATE DATABASE my_db";
if(mysqli_query($con,$sql))
{
	echo "Database my_db created successfully!<br>";
}
else
{
	echo "Error creating database: " . mysqli_error($con);
}*/

//Create table
/*$sql = "CREATE TABLE Persons
(
PID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(PID),
FirstName CHAR(15),
LastName CHAR(15),
Age INT
)";

if(mysqli_query($con,$sql))
{
echo "Table persons created successfully";
}
else
{
echo "Error creating table: " . mysqli_error($con);
}*/

//Insert Datas
/*mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin',35)");

mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Glenn', 'Quagmire',33)");*/

//Update datas
mysqli_query($con,"UPDATE Persons SET Age=32
WHERE FirstName='Peter' AND LastName='Griffin'");

//Select Datas
$result = mysqli_query($con,"SELECT * FROM Persons");
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['FirstName'] . "</td>" ;
	echo "<td>" . $row['LastName'] . "</td>";
	echo "<td>" . $row['Age'] . "</td>";
	echo "<tr>";
}
echo "</table>";
//Close connection
mysqli_close($con);
?>