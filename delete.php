<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include("connect.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result=mysql_query("DELETE FROM info WHERE user_id=$id");

//redirecting to the display page (view.php in our case)
header("Location:view.php");
?>

