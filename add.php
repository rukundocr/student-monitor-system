<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script><script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
 </head>
<body></body>
<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("connect.php");

if(isset($_POST['Submit'])) {	
	$card = $_POST['card'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$option = $_POST['agent_id'];
    $class = $_POST['agent1_id'];
	$sex = $_POST['sex'];
	$date = $_POST['date'];
	$parentname = $_POST['parents'];
	$adress = $_POST['adress'];
	$phone = $_POST['number'];
	$loginId = $_SESSION['id'];

		
	// checking empty fields
	if(empty($card ) || empty($fname) || empty($lname)|| empty($class) ||empty($option) ||empty($sex)||empty($date) ||empty($parentname) ||empty($adress)||empty($phone)|empty($phone)) {
				
		if(empty($card)) {
			echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";
			//echo "<font color='red'>card number  field is empty.</font><br/>";
		}
		
		if(empty($fname)) {
          echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";
			//echo "<font color='red'>FIRST NAME field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";

			//echo "<font color='red'>last name field is empty.</font><br/>";
		}
		
		//link to the previous page
		//echo "<br/><a href='javascript:self.history.back();'>Go Back</
		//a>";
		if(empty($class)) {
			echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";

			//echo "<font color='red'>class field is empty.</font><br/>";
		}
		
		if(empty($option)) {
			echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";

			//echo "<font color='red'>option field is empty.</font><br/>";
		}
		
		if(empty($sex)) {
			echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";

			//echo "<font color='red'>sex  field is empty.</font><br/>";
		}
		if(empty($date)) {
			echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";

			//echo "<font color='red'>date of birth field is empty.</font><br/>";
		}
		
		if(empty($parentname)) {echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";
			echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";

			//echo "<font color='red'>parent name field is empty.</font><br/>";
		}
		
		if(empty($adress)) {
        echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";
			//echo "<font color='red'>adress  field is empty.</font><br/>";
		}
		if(empty($phone)) {
    echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>card number  field is empty </b>

</div>

    ";
			//echo "<font color='red'>phone number  field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 

	else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		//$result = mysqli_query($mysqli, "INSERT INTO info(name, qty, 
		//price, login_id) VALUES('$name','$qty','$price', 
		//'$loginId')");
    $sql= "INSERT INTO `info` (`user_id`, `time`, `CARD_ID`, `first_name`, `last_name`, `class_id`, `option_id`, `sex`, `D_BIRTH`, `PARENT_NAME`, `PARENT_ADRESS`, `PARENT_PHONE`, `in1`) VALUES (NULL, CURRENT_TIMESTAMP,'$card','$fname','$lname','$class','$option','$sex','$date','$parentname','$adress','$phone','')";
   $run_query=mysql_query($sql);


		// $result = mysql_query("INSERT INTO `info` (`user_id`, 
    //`time`, `CARD_ID`, `first_name`, `last_name`, `CLASS`, //`OPTIONS`, `sex`, `D_BIRTH`, `PARENT_NAME`, `PARENT_ADRESS`, //`PARENT_PHONE`, `in1`) VALUES (NULL, CURRENT_TIMESTAMP,'$card', //'$fname', '$lname', '$class', '$option', '$sex', '$date', //'$parentname', '$adress', '$phone', ''");


		
		//display success message
		if($run_query){
           echo "<div class='alert alert-success'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data added successfully. </b>

</div>

    ";
         //echo "<font color='green'>Data added successfully.";
          echo "<div class='alert alert-success'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><br/><a href='view.php'>View Result</a> </b>

</div>

    ";
		 //echo "<br/><a href='view.php'>View Result</a>";
	}

		else{
			echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>failed to insert record </b>

</div>

    ".mysql_error();
			//echo "failed to insert record".mysql_error();
		}
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='view.php'>View Result</a>";
	}
}
?>

</body>
</html>
