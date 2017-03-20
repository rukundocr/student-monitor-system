
<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connect.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$card = $_POST['card'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$class = $_POST['class'];
	$option = $_POST['option'];
	$sex = $_POST['sex'];
	$date = $_POST['date'];
	$parentname = $_POST['parents'];
	$adress = $_POST['adress'];
	$phone = $_POST['number'];	
	
	// checking empty fields
	if(empty($card) || empty($fname) || empty($lname)|| empty($class)|| empty($option)|| empty($sex) || empty($date)|| empty($parentname)|| empty($adress)|| empty($phone)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($qty)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysql_query("UPDATE info SET CARD_ID='$card', first_name ='$fname', last_name='$lname', option_id='$option' ,class_id='$class',sex='$sex', D_BIRTH='$date', PARENT_NAME='$parentname', PARENT_ADRESS='$adress', PARENT_PHONE='$phone'  WHERE user_id=$id");
		if($result){
    echo "student record updated successfully";
    //redirectig to the display page. In our case, it is view.php
		header("Location: view.php");
		}
		else{
			echo "update record failed.".mysql_error();
		}
		
		//redirectig to the display page. In our case, it is view.php
		//header("Location: view.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM info WHERE user_id='$id'");

while($res=mysql_fetch_array($result))
{
	$card = $res['CARD_ID'];
	$fname = $res['first_name'];
	$lname = $res['last_name'];
	$class = $res['option_id'];
	$option = $res['class_id'];
	$sex = $res['sex'];
	$date = $res['D_BIRTH'];
	$parentname= $res['PARENT_NAME'];
	$adress= $res['PARENT_ADRESS'];
	$phone= $res['PARENT_PHONE'];

}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>edit content</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script><script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
       


    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">SUPERTECH LTD</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  HOME<span class="sr-only">(current)</span></a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-th-list"></span>   PRODUCTS</a></li>
      </ul>
    </div>
    </div>
    </nav>
  <p><br></p>
  <p><br></p>
	
</head>

<body>
	<a href="class.php"><span class="glyphicon glyphicon-book"></span> VIEW RECORDS BY CLASS</a>
<p><br></p>
	<a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a> | <a href="add.html"><span class="glyphicon glyphicon-pencil"></span>ADD NEW STUDENT</a> | <a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a>|<a href="search.php"><span class="glyphicon glyphicon-search"></span>SEARCH STUDENT</a>|<a href="sms.html"><span class="glyphicon glyphicon-envelope"></span>SMS CHECK</a>
	<br/><br/>
	<br/><br/>
	  <h2 align="center">UPDATE STUDENT RECORDS</h2>
	<form name="form1" method="post" action="edit.php" >
		<table border="0" align="center">
			<tr> 
				<td>RFID CARD NUMBER</td>
				<td><input type="text" name="card" value="<?php echo $card;?>"></td>
			</tr>
			<tr> 
				<td>FIRST NAME</td>
				<td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
			</tr>
			<tr> 
				<td>LAST NAME</td>
				<td><input type="text" name="lname" value="<?php echo $lname;?>"></td>
			</tr>
			<tr> 
				<td>CLASS</td>
				<td><input type="text" name="class" value="<?php echo $class;?>"></td>
			</tr>
			<tr> 
				<td>OPTION</td>
				<td><input type="text" name="option" value="<?php echo $option;?>"></td>
			</tr>
			<tr> 
				<td>SEX</td>
				<td><input type="text" name="sex" value="<?php echo $sex;?>"></td>
			</tr>
			<tr> 
				<td>DATE OF BIRTH</td>
				<td><input type="text" name="date" value="<?php echo $date;?>"></td>
			</tr>
			<tr> 
				<td>PARENT NAMES</td>
				<td><input type="text" name="parents" value="<?php echo $parentname;?>"></td>
			</tr>
			<tr> 
				<td>PARENT ADRESS</td>
				<td><input type="text" name="adress" value="<?php echo $adress;?>"></td>
			</tr>
			<tr> 
				<td>PARENT PHONE</td>
				<td><input type="text" name="number" value="<?php echo $phone;?>"></td>
			</tr>

			<tr>
				<td><input type="hidden" name="id" value= "<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	         <a href="view.php">back to records</a>

<!--  <h2 align="center" style="color:blue"> ADDIT  STUDENT IN DATABASE</h2>
  <form action="edit.php" method="post" class="form-horizontal" >
    <div class="form-group">
      <label style="color:blue" class="control-label col-sm-2" for="email">RFID CARD NUMBER:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="card" name="card" value="<?php echo $card;?>" placeholder="Enter card number" required>
      </div>
    </div>
    <div class="form-group">
      <label style="color:blue" class="control-label col-sm-2" for="fnmae">FIRST NAME:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname;?>"  placeholder="Enter first name">
      </div>
    </div>
    <div class="form-group">
      <label style="color:blue" class="control-label col-sm-2" for="pwd">LAST NAME:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname;?>" placeholder="Enter last name">
      </div>
    </div>
    <div class="form-group">
      <label style="color:blue" class="control-label col-sm-2" for="option">OPTION:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="option" name="option" value="<?php echo $option;?>" placeholder="Enter option">
      </div>
    </div>
    <div class="form-group">
      <label style="color:blue" class="control-label col-sm-2" for="class">CLASS:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="class" name="class" value="<?php echo $class;?>" placeholder="Enter class">
      </div>
    </div>
    <div class="form-group">
      <label style="color:blue" class="control-label col-sm-2" for="pwd">SEX:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="sex" name="sex" value="<?php echo $sex;?>" placeholder="male or female">
      </div>
    </div>
    <div class="form-group">
      <label style="color:blue" class="control-label col-sm-2" for="date">DATE OF BIRTH:</label>
      <div class="col-sm-6">          
        <input type="year" class="form-control" id="date" name="date" value="<?php echo $date;?>" placeholder="Enter only year ">
      </div>
    </div>
    <div class="form-group">
      <label style="color:blue" class="control-label col-sm-2" for="pwd">PARENT NAME:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="parents" name="parents" value="<?php echo $parentname;?>" placeholder="Enter parent name">
      </div>
    </div>
    <div class="form-group">
      <label style="color:blue" class="control-label col-sm-2" for="parent">PARENT ADRESS:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="adress" name="adress" value="<?php echo $adress;?>" placeholder="Enter parent adress">
      </div>
    </div>
    <div class="form-group">
      <label style="color:blue" class="control-label col-sm-2" for="pwd">PARENT PHONE NUMBER:</label>
      <div class="col-sm-6">          
        <input type="number" class="form-control"  name="number" value="<?php echo $phone;?>" placeholder="Enter parent phone number">
      </div>
    </div>
    
    <div class="form-group">          
      <div class="col-sm-offset-2 col-sm-10">
       <input type="hidden" name="id" value= "<?php echo $_GET['id'];?>">
        <button type="submit" id="submit" name="Submit"    class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>-->



</body>
</html>
