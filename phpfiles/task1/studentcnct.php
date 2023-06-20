<?php
$db_host='localhost';
$db_user='VYM';
$db_passwd='Veena1234';//if there is no user account then the user will be root and passwd='';
$db_name="college";//this is the name as per db createdd....
$dbh=mysqli_connect($db_host,$db_user,$db_passwd,$db_name)
or
//die works only when there is problem with the connection
die("Error connecting to the database");
echo"connection is success....";
?>