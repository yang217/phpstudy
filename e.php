<?php
	session_start();
	
	$_SESSION['views']+=1;
echo 'hello world';
$a=$_POST["yang"];
echo "Pageviews=". $_SESSION['views'];
echo $a;
$con = mysql_connect("localhost","haitour","Flipscript@0502");
//if (!$con)
//{
//
//die('Could not connect: ' . mysql_error());
//}
//if (mysql_query("CREATE DATABASE my_db",$con))
//{
//echo "Database created";
//}
//else
//{
//echo "Error creating database: " . mysql_error();
//}

mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Persons 
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";
mysql_query($sql,$con);
mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Peter', 'Griffin', '35')");
mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM Persons ORDER BY age");
mysql_query("DELETE FROM Persons WHERE LastName='Griffin'");
mysql_query("UPDATE Persons SET Age = '36'
WHERE FirstName = 'Peter' AND LastName = 'Griffin'");
while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'];
  echo " " . $row['LastName'];
  echo " " . $row['Age'];
  echo "<br />";
  }
  
//mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
//VALUES ('Glenn', 'Quagmire', '3223')");
//$result = mysql_query("SELECT * FROM Persons
//WHERE FirstName='Peter'");
//
//while($row = mysql_fetch_array($result))
//{
//echo $row['FirstName'] . " " . $row['LastName'];
//echo "<br />";
//}


//mysql_select_db("my_db", $con);
//
//$result = mysql_query("SELECT * FROM Persons");
//
//echo "<table border='1'>
//<tr>
//<th>Firstname</th>
//<th>Lastname</th>
//</tr>";
//
//while($row = mysql_fetch_array($result))
//{
//echo "<tr>";
//echo "<td>" . $row['FirstName'] . "</td>";
//echo "<td>" . $row['LastName'] . "</td>";
//echo "</tr>";
//}
//echo "</table>";


mysql_close($con);

// some code
?>