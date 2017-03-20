









#!/usr/bin/php

<?php
    $data = array(	 	
		"sender"=>"+250783289997",
		"recipients"=>"+250788550874",
		"message"=>"This is Web App SMS Test",		
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
	echo "The Web App SMS Has Been Sent";

	//sudo apt-get install php5-curl
	//sudo service apache2 restart
?>
