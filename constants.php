<?php

          //Start session 
          session-start();

  //Create Constants to Store Non Repeating values
  
   define('SITEURL', 'http://localhost/cleaning-service/'
   define('LOCALHOST', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_NAME', 'cleaning-service');
 $conn = mysql_connect(LOCALHOST, DB_USERNAME,DB_PASSWORD ) or die (mysql_error()); //Database connection
 $db_select = mysql_select_db($conn, DB_NAME) or die (mysql_error()); // Selecting Database

?>