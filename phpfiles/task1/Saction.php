<?php
include("studentcnct.php");
$name=$_POST['name'];
$rollnum=$_REQUEST['rollnum'];
$cgpa=$_POST['cgpa'];
$mobilenumber=$_POST['mobilenumber'];
$gender=$_POST['gender'];
$branch=$_POST['branch'];
$rel="INSERT INTO student (Name,RollNo,CGPA,Mobile,Gender,Branch) VALUES('$name','$rollnum','$cgpa','$mobilenumber','$gender','$branch')";
$Frel=mysqli_query($dbh,$rel)or
die("Error with querying the db");
echo"operation success,pls refresh your pagee...";
?>