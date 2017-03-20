<!DOCTYPE html>
<html>
<head>
         <meta charset="utf-8">
          <title>ARDUINO MYSQL AND PHP</title>
           <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery2.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </head>
       <body>
       <?php

date_default_timezone_get('Africa/Cairo');
$intime=date('H:i:s');
echo "$intime";

       ?>
         <P><br><P>
        <form action="search.php" method="GET" class="form-group">
         <input type="text" name="query" />
         <input type="submit" value="Search" class="btn btn-primary" />
        </form>
        <P><br><P>
         <P><br><P>
         <h1 style="color:blue"> DATABASE CONTENT </h1>
	      <table width="50" border="1" cellspacing ="2" cellpadding ="5";
	      <tr style="color: red; background: black;" >
	           <td style="color: white"><b>ID</b></td>
		       <td style="color: white"><b>TIME </b></</td>
		       <td style="color: white"><b>TAG CODE</b></</td>
		       <td style="color: white"><b>FIRST NAME</b></</td>
		       <td style="color: white"><b>LAST NAME</b></</td>
		       <td style="color: white"><b>STATUS</b></</td>
		     </tr>
			 
			       
			  
<?php

 include("connect.php");
	$result = mysql_query("select * from info ");
	 while($data = mysql_fetch_array($result))
	{
		echo '<tr>';
	         echo '<td>'.$data["user_id"].'</td>';
	         echo '<td>'.$data["time"].'</td>';
	         echo '<td>'.$data["CARD_ID"].'</td>';
	         echo '<td>'.$data["first-name"].'</td>';
		     echo '<td>'.$data["last_name"].'</td>';
		     echo '<td>'.$data["in1"].'</td>';
		
	    echo '</tr>';
	}
	?>
	</table>
	</body>
	</html>