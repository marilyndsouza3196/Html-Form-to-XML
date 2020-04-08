<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'db');
 
 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);
 //echo "hi";
 /*$email=$_POST['email'];
 $name=$_POST['name'];
 $password=$_POST['pass'];
  $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
   mysql_query($query);*/
     //header("location:test.php");
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 
 }?>
 