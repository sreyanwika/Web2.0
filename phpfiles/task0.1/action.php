<?php
include("connect.php");
$name=$_POST['name'];
$id=$_POST['id'];
$age=$_REQUEST['age'];
$salary=$_POST['salary'];
$rel="INSERT INTO staff (Name,ID,Age,SALARY) VALUES('$name','$id','$age','$salary')";
$Frel=mysqli_query($dbh,$rel)or
die("Error with querying the db");
echo"operation success,pls refresh your pagee...";
?>