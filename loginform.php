
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>supertech Store</title>
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
  <p><br></p>
      <div  class="container-fluid">
      <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-6">
        <div class="panel-primary">
        <div class="panel-heading">login form</div>
             <div class="panel-body">
             <div class="row">
              <div class="col-md-12" id="signup_msg">
              <!--alert from sign up form-->
              </div>
             </div>
             <form action="login.php" method="post">
    <p>
     
        <label for="emailAddress">USERNAME:</label>
        <input type="text" name="username" id="username" required class="form-control">
    </p>
     <p>
        <label for="password">PASSWORD:</label>
        <input type="password" name="password" id="password" required  class="form-control">
    </p>
     <p>
    <input type="submit" value="Submit" name="submit"  class="btn btn-primary">
</form>
             <!--<form method="POST" >
                  <div class="panel-heading">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" required/>
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" required/>
                  <p><br/></p>
                  <a href="#" style="color:white; list-style:none;">Forgotten Password</a>
                  <input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
                </div>-->

              
              
              <div>
              <a href="index.php"><span class="glyphicon glyphicon-home"></span>BACK TO HOME PAGE</a>
               </div>
               </div>
               <p><br></b></p>
                  <div class="panel-footer"> copyright  <?php echo date('Y'); ?>   supertech ltd </div>
        </div>
      </div>
      <!--<div class="col-md-3"></div>-->
        
      </div>
     

    </body>
 </html>
