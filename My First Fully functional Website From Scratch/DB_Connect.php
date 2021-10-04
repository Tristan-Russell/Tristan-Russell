<?php

 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "7007";
 $db = "itec_dev2";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: ". $conn-> error);
 ?>
