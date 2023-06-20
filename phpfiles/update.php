<?php
include("connect.php");
$query="UPDATE pastry SET coolCake='dangerzone' WHERE coolCake='BlackMouse'";
$res=mysqli_query($dbh,$query)
or
die("Error with querying the db");
?>