

<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
         <meta charset="utf-8">
          <title>Sms check</title>
                 <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script><script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <style>
      @media screen and (max-width:480px){
        #search{width:80%;}
        #search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
      }
      /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:150px;
  }
  test.jumbotron { min-height: 50px; }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
    </style>
  </head>
<body>
 <!--<div class="jumbotron text-center">
  <h1>SUPERTECH LTD</h1>
  <p>We are specialize in sales in electronics products </p>
  <form class="form-inline">
    <div class="input-group">
      <input type="email" class="form-control" size="30" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>-->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
          <span class="sr-only">navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">STUDENT MONOTORING SUSTEM</a>
      </div>
    <div class="collapse navbar-collapse" id="collapse">
      <ul class="nav navbar-nav">
        <li><a href='register.php'><span class="glyphicon glyphicon-home"></span>ADD ADMIN USER</a></li>
        <li><a href='view.php'><span class="glyphicon glyphicon-modal-window"></span>VIEW AND ADD STUDENTS</a></li>
        </ul>
        </div>
        </div>
        </div>
        <p><br></p>
        <p><br></p>
        <p><br></p>
        <a href="class.php"><span class="glyphicon glyphicon-book"></span> VIEW RECORDS BY CLASS</a>
<p><br></p>
  <a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a> | <a href="add.html"><span class="glyphicon glyphicon-pencil"></span>ADD NEW STUDENT</a> | <a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a>|<a href="search.php"><span class="glyphicon glyphicon-search"></span>SEARCH STUDENT</a>|<a href="sms.html"><span class="glyphicon glyphicon-envelope"></span>SMS CHECK</a>
  <br/><br/>
     <!-- <p><br></p>
        <form action="search.php" method="GET"  class="form-group" align="center">
        <label for search>ENTER STUDENT CARD NUMBER:</label>
         <input type="text" name="query" />
        <input type="submit" value="Search" class="btn btn-primary" />
        </form>
        <P><br><P>-->
<P><br><P>
<form action="class.php" method="POST" align="center">
<label for Class>SELECT OPTION</label>
	<select name="agent_id" required>
	    <option value="">---select----</option>
		<option value="1">ELECTRONICS</option>
        <option value="2">ELECTRICAL</option>
        <option value="3">CONSTRUCTION</option>
        <option value="4">BIOMEDICAL</option>
        
	</select>
<label for Class>SELECT CLASS </label>
	<select name="agent1_id" required>
	    <option value="">----select---</option>
		<option value="1">S4</option>
        <option value="2">S5</option>
        <option value="3">S6</option>
	  </select>
	
    <input type="submit" name="find" value="submit">
</form>
<P><br><P>
       
         <h1 style="color:blue" align="center">SEARCH RESULT TABLE </h1>
          <table width="50" border="2" cellspacing ="4" cellpadding ="5" align="center">;
          <tr bgcolor="#CCCCCC;" >
               <td class="btn-primary"><b>CARD ID</b></td>
               <td class="btn-primary"><b>FIRSTNAME</b></</td>
               <td class="btn-primary"><b>LAST NAME</b></</td>
               <td class="btn-primary"><b>OPTION ID</b></</td>
               <td class="btn-primary"><b>CLASS ID</b></</td>
               <td class="btn-primary"><b>SEX</b></td>
               <td class="btn-primary"><b>DATE OF BIRTH </b></</td>
               <td class="btn-primary"><b>PARENT NAME</b></</td>
               <td class="btn-primary"><b>PARENT ADRESS</b></</td>
               <td class="btn-primary"><b>PARENT PHONE</b></</td>
               <td class="btn-primary"><b>ACTION</b></</td>
             </tr>


<?php

include_once("connect.php");
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

if(isset($_POST['find'])) {
	  $option = $_POST['agent_id'];
     $class = $_POST['agent1_id'];


   $sql="SELECT info.user_id, info.CARD_ID, info.first_name, info.last_name,info.sex,info.D_BIRTH,info.PARENT_NAME,info.PARENT_ADRESS,info.PARENT_PHONE, options.option_name,class.class_name FROM info,options,class ";
	  $run_query3=mysql_query($sql);
	  while ($res=mysql_fetch_array($run_query3)){
	  	echo "<tr>";
			echo "<td>".$res['CARD_ID']."</td>";
			echo "<td>".$res['first_name']."</td>";
			echo "<td>".$res['last_name']."</td>";	
			echo "<td>".$res['option_name']."</td>";
			echo "<td>".$res['class_name']."</td>";
			echo "<td>".$res['sex']."</td>";
			echo "<td>".$res['D_BIRTH']."</td>";
			echo "<td>".$res['PARENT_NAME']."</td>";
			echo "<td>".$res['PARENT_ADRESS']."</td>";
			echo "<td>".$res['PARENT_PHONE']."</td>";
			echo "<td><a href=\"edit.php?id=$res[user_id]\">UPDATE</a> | <a href=\"delete.php?id=$res[user_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";	
      /*$card=$res['CARD_ID'];
      $fname=$res['first_name'];
      $lname=$res['last_name'];
      $option=$res['option_id'];
      $class=$res['class_id'];
      $sex=$res['sex'];
      $date=$res['D_BIRTH'];
      $Parent=$res['PARENT_NAME'];
      $adress=$res['PARENT_ADRESS'];
      $phone=$res['PARENT_PHONE'];*/
      
	  
	  }

   if(!$run_query3){
    echo "query failed".mysql_error();
   }

     }
?>

  

</table>
    </body>
    </html>