
<?php
include("connect.php");

$sensor   = $_GET['sensor'];
$sensor1  = $_GET['sensor1'];
$sensor2  = $_GET['sensor2'];

$sql_insert = "insert into info (sensor,sensor1,sensor2) values ('$sensor','$sensor1','$sensor2')";
mysql_query($sql_insert);
if ($sql_insert){
	echo(" DATA INSETED INTO DATABASE");
	
}else{
	
echo("not connected to database");
}

?>