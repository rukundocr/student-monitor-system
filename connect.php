<?php
$username = "root";
$password = "";
$host = "localhost";
$conn =mysql_connect($host,$username,$password);
$selectdb = mysql_select_db('sensor1',$conn);

if($conn){
	echo("");
}else{
	echo("could not connect to database".mysql_error());
}

?>