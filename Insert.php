<html>
<head>
<?php
define('DB_SERVER', 'ecsmysql');
define('DB_USERNAME', 'cs332s14');
define('DB_PASSWORD', 'shigieda');
define('DB_DATABASE', 'cs332s14');
$con= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysql_select_db(DB_USERNAME,$con); 
	$con= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	mysql_select_db(DB_USERNAME,$con); 
	mysqli_query($con,"'%".$_POST["InsertInto"]."%'"); 
	echo "<script> type = \"text/javascript\">";
	echo "document.getElementsById(OutputsTable) = \"\";"
	echo "</script>";
	mysql_close($con); 
?>
<head>
<html>