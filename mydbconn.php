<?php
   $servername = "partsreq.advantek-trading.com";
   $username = "arjunmb";
   $password = "veronica1";
   $database = "gluae";
      
   // create connection
   $conn = new mysqli($servername, $username, $password, $database);
   // check connection
   if($conn->connect_error){
		die("Connection failed " . $conn->connect_error);
	}
?>