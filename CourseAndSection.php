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
$Results = mysqli_query($con,"SELECT DISTINCT GRADE, COUNT(*) AS Count FROM ENROLL,SECTION WHERE ENROLL.CNUM = '%" .$_POST["Course"]. "%' AND SECTION.SECNUM = '%" .$_POST["Section"]. "%' GROUP BY GRADE");
echo "<script> type = \"text/javascript\">";
echo "var OutTable = document.getElementsById(\"OutputsTable\")";
echo "OutTable.innerHTML = \"\";"
while($row = mysqli_fetch_assoc($Results))
	{
		echo "var rowTable = OutTable.insertRow(-1)";
		echo "var cell0 = rowTable.insertCell(-1)";
		echo "var cell1 = rowTable.insertCell(-1)";
		echo "cell0.innerHTML = '%" .$row['Grade']. "%'";
		echo "cell1.innerHTML = '%" .$row['Count']."%'";
	}
echo "</script>";
mysql_close($con);
?>
</body>
</html>