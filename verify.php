
#!/usr/bin/php
<?php

include "connect.php";
date_default_timezone_get('Africa/Cairo');
$intime=date('H:i:s');
//echo "$intime";

$initialtime=('00:00:00');
$query = $_GET['query']; 
    // gets value sent over search form
     
    //$min_length = 3;
    // you can set minimum length of the query if you want
  //if($intime==$initialtime){
    // echo "attendance recorded successfully. you get in";
    //mysql_query("UPDATE  info SET in1='0' WHERE in1='0'") or die
//(mysql_error());

  //}
     
    //if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        //verify existing card number 
  $find="SELECT * FROM info WHERE CARD_ID='$query'";
  $run_query=mysql_query($find);
    //$find =mysql_query("SELECT * FROM info WHERE CARD_ID='$query'");
     if(mysql_num_rows($run_query)>0){
      while ($row=mysql_fetch_array($run_query)){
           $user_id=$row ["user_id"];
           $firstname=$row ["first_name"];
           $lastname=$row ["last_name"];
           $CARD_ID=$row ["CARD_ID"];
           $in1=$row ["in1"];
           $phone=$row["PARENT_PHONE"];
          

            if($in1==0){
            $sql="INSERT INTO `attendance` (`id`, `user_id`, `first_name`, `last_name`, `CARD_ID`, `date`, `IN_TIME`, `OUT_TIME`) VALUES (NULL, '$user_id', '$firstname ', '$lastname', '$CARD_ID', CURRENT_TIMESTAMP, '$intime', '00:00:00')";
            $run_query=mysql_query($sql);
             if($run_query){
              echo "attendance recorded successfully. you get in";
              mysql_query("UPDATE info SET in1='1' WHERE CARD_ID='$query'") or die(mysql_error());

               $count =mysql_query("SELECT smscount FROM login  ");
                if(mysql_num_rows($count)>0){
                     while($row=mysql_fetch_array($count)){
                      $sms=$row["smscount"];
                     }
                    }
                    mysql_query("UPDATE login SET smscount= $sms+1");


                 


                 
              
    
     $message ="your student  $firstname   $lastname is arrived at school at $intime ";
    $data = array(    
    "sender"=>"+250783289997",
    "recipients"=>$phone,
    "message"=>$message,    
  );

  $url = "https://www.intouchsms.co.rw/api/sendsms/.json";
  
  $data = http_build_query ($data);

  $username="rukundocr";
  $password="505050cr";
  
  //open connection
  $ch = curl_init();

  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
  curl_setopt($ch,CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $data);

  //execute post
  $result = curl_exec($ch);
  $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  //close connection
  curl_close($ch);
  
  echo $result;
  echo $httpcode;
  echo "your student $firstname   $lastnameis arrived at school at $intime";

  //sudo apt-get install php5-curl
  //sudo service apache2 restart


       }else{
        echo"attendance failed.try again!!!!!!!!!";
            }
          }
          else if($in1==1){
          mysql_query("UPDATE info SET in1='0' WHERE CARD_ID='$query'") or die(mysql_error());
           $sql="INSERT INTO `attendance` (`id`, `user_id`, `first_name`, `last_name`, `CARD_ID`, `date`, `IN_TIME`, `OUT_TIME`) VALUES (NULL, '$user_id', '$firstname ', '$lastname', '$CARD_ID', CURRENT_TIMESTAMP, '00:00:00', '$intime')";
            $run_query=mysql_query($sql);
             if($run_query){
              echo "attendance recorded successfully.you get out...";


               $count =mysql_query("SELECT smscount FROM login  ");
                if(mysql_num_rows($count)>0){
                     while($row=mysql_fetch_array($count)){
                      $sms=$row["smscount"];
                     }
                    }
                mysql_query("UPDATE login SET smscount= $sms+1 ");



      $message ="your student $firstname   $lastname  quits the school at $intime";
    $data = array(    
    "sender"=>"+250783289997",
    "recipients"=>$phone,
    "message"=>$message,    
  );

  $url = "https://www.intouchsms.co.rw/api/sendsms/.json";
  
  $data = http_build_query ($data);

  $username="rukundocr";
  $password="505050cr";
  
  //open connection
  $ch = curl_init();

  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
  curl_setopt($ch,CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $data);

  //execute post
  $result = curl_exec($ch);
  $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  //close connection
  curl_close($ch);
  
  echo $result;
  echo $httpcode;
  echo "your student $firstname  $lastname quits school at $intime ";

  //sudo apt-get install php5-curl
  //sudo service apache2 restart

              
       }else{
        echo"attendance failed.try again!!!!!!!!!";
            }
          }
        }
     

     }else{

    echo "card not exist in database ";
    
      }
                    
  
    

            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                // echo "<p><h3>".$results['sensor1']."</h3>".$results['sensor2'].$results['sensor2']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
           
?>

    