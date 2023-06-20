<?php
include("connect.php");//imnclue fun is used to copy other file content
$query="select * from staff";//db query
$result=mysqli_query($dbh,$query)//mysqli_query is a builtin func ,$dbh is useed in coonection.php in order to connect to db
or
die("Error with querying the db");//works when there is any p-0rob with the query
echo"<br/>";
echo"fetching success";
echo"<br/>";
while($row=mysqli_fetch_assoc($result)){//mysqli_fetch_assoc is a buitlin func to fetch data n assoc is associative array ,while is used bcz we dont know hw mny rows r there
    /*echo "NAME:".$row['name']."<br/>";
    echo "ID:".$row['id']."<br/>";
    echo "AGE:".$row['age']."<br/>";
    echo "SALARY:".$row['salary']."<br/>";*/
    echo "NAME:".$row['Name']." ID:".$row['ID']." AGE:".$row['Age']." SALARY:".$row['SALARY']."<br/>";
}
?>