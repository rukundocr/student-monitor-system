<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connect.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM info WHERE 
//login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<html>
<head>
	<title>Homepage</title>
</head>
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
				<li><a href='#'><span class="glyphicon glyphicon-home"></span>ADD ADMIN USER</a></li>
				<li><a href='view.php'><span class="glyphicon glyphicon-modal-window"></span>VIEW AND ADD STUDENTS</a></li>
        </ul>
        </div>
        </div>
        </div>
        <p><br></p>
      <p><br></p>

<body>
<p><br></p>
<a href="class.php"><span class="glyphicon glyphicon-book"></span> VIEW RECORDS BY CLASS</a>
<p><br></p>
	<a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a> | <a href="add.html"><span class="glyphicon glyphicon-pencil"></span>ADD NEW STUDENT</a> | <a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a>|<a href="search.php"><span class="glyphicon glyphicon-search"></span>SEARCH STUDENT</a>|<a href="sms.html"><span class="glyphicon glyphicon-envelope"></span>SMS CHECK</a>
	<br/><br/>
	
	<h1 style="color:blue" align="center"> SMS COUNTER   </h1>
          <table width="70" border="3" cellspacing ="5" cellpadding ="10" align="center" >;
		<!--<tr bgcolor='#CCCCCC'>-->
		<tr class="btn-danger">
			<td>TOTAL SMS USED</td>
			
		</tr>
		<?php
		$result = mysql_query("SELECT * from login ");
		while($res = mysql_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['smscount']."</td>";
					
		}
		?>
	</table>	
</body>
</html>
