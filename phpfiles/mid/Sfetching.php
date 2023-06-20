<html><body>
    <?php
include("studentcnct.php");//imnclue fun is used to copy other file content
$query1="select * from student where CGPA>6.5";//db query
$result1=mysqli_query($dbh,$query1)//mysqli_query is a builtin func ,$dbh is useed in coonection.php in order to connect to db
or
die("Error with querying the db");//works when there is any p-0rob with the query
$query2="select * from student where CGPA>=7";
$result2=mysqli_query($dbh,$query2)
or
die("Error with querying the db");
$query3="select * from student where CGPA>=9";
$result3=mysqli_query($dbh,$query3)
or
die("Error with querying the db");
$query4="select * from student where CGPA>=8";
$result4=mysqli_query($dbh,$query4)
or
die("Error with querying the db");
echo"<br/>";
echo"fetching success";
echo"<br/>";
?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>SERIALNUMBER</td>
    <td>STUDENTNAME</td>
    <td>ROLLNUMBER</td>
    <td>CGPA</td>
    <td> MOBILENUMBER</td>
    <td>GENDER</td>
    <td>BRANCH</td>
    <td>eligibility</td>
</tr>
    <?php
while($row=mysqli_fetch_assoc($result1)){//mysqli_fetch_assoc is a buitlin func to fetch data n assoc is associative array ,while is used bcz we dont know hw mny rows r there
    /*echo "NAME:".$row['name']."<br/>";
    echo "ID:".$row['id']."<br/>";
    echo "AGE:".$row['age']."<br/>";
    echo "SALARY:".$row['salary']."<br/>";*/
    /*echo "STUDENTNAME:".$row['Name']." ROLLNUMBER:".$row['RollNo']." CGPA:".$row['CGPA']." MOBILENUMBER:".$row['Mobile']." GENDER:".$row['Gender']." BRANCH:".$row['Branch']."<br/>"</td>;*/
    ?>
    <tr>
    <td> <?php echo $row['SI_NO']?></td>
    <td> <?php echo $row['Name']?></td>
    <td><?php echo $row['RollNo']?> </td>
    <td> <?php echo $row['Cgpa']?></td>
    <td><?php echo $row['Mobile']?></td>
    <td><?php echo $row['Gender']?></td>
    <td><?php echo $row['Branch']?></td>
<td>students eligible for tcs</td></tr>
<br>
    <?php
}
while($row=mysqli_fetch_assoc($result2)){//mysqli_fetch_assoc is a buitlin func to fetch data n assoc is associative array ,while is used bcz we dont know hw mny rows r there
    /*echo "NAME:".$row['name']."<br/>";
    echo "ID:".$row['id']."<br/>";
    echo "AGE:".$row['age']."<br/>";
    echo "SALARY:".$row['salary']."<br/>";*/
    /*echo "STUDENTNAME:".$row['Name']." ROLLNUMBER:".$row['RollNo']." CGPA:".$row['CGPA']." MOBILENUMBER:".$row['Mobile']." GENDER:".$row['Gender']." BRANCH:".$row['Branch']."<br/>"</td>;*/
    ?>
    <tr>
    <td> <?php echo $row['SI_NO']?></td>
    <td> <?php echo $row['Name']?></td>
    <td><?php echo $row['RollNo']?> </td>
    <td> <?php echo $row['Cgpa']?></td>
    <td><?php echo $row['Mobile']?></td>
    <td><?php echo $row['Gender']?></td>
    <td><?php echo $row['Branch']?></td>
    <td>students eligible for ibm</td></tr><br>
    <?php
}
while($row=mysqli_fetch_assoc($result3)){//mysqli_fetch_assoc is a buitlin func to fetch data n assoc is associative array ,while is used bcz we dont know hw mny rows r there
    /*echo "NAME:".$row['name']."<br/>";
    echo "ID:".$row['id']."<br/>";
    echo "AGE:".$row['age']."<br/>";
    echo "SALARY:".$row['salary']."<br/>";*/
    /*echo "STUDENTNAME:".$row['Name']." ROLLNUMBER:".$row['RollNo']." CGPA:".$row['CGPA']." MOBILENUMBER:".$row['Mobile']." GENDER:".$row['Gender']." BRANCH:".$row['Branch']."<br/>"</td>;*/
    ?>
    <tr>
    <td> <?php echo $row['SI_NO']?></td>
    <td> <?php echo $row['Name']?></td>
    <td><?php echo $row['RollNo']?> </td>
    <td> <?php echo $row['Cgpa']?></td>
    <td><?php echo $row['Mobile']?></td>
    <td><?php echo $row['Gender']?></td>
    <td><?php echo $row['Branch']?></td>
    <td>students eligible for google</td></tr><br>
    <?php
}
while($row=mysqli_fetch_assoc($result4)){//mysqli_fetch_assoc is a buitlin func to fetch data n assoc is associative array ,while is used bcz we dont know hw mny rows r there
    /*echo "NAME:".$row['name']."<br/>";
    echo "ID:".$row['id']."<br/>";
    echo "AGE:".$row['age']."<br/>";
    echo "SALARY:".$row['salary']."<br/>";*/
    /*echo "STUDENTNAME:".$row['Name']." ROLLNUMBER:".$row['RollNo']." CGPA:".$row['CGPA']." MOBILENUMBER:".$row['Mobile']." GENDER:".$row['Gender']." BRANCH:".$row['Branch']."<br/>"</td>;*/
    ?>
    <tr>
    <td> <?php echo $row['SI_NO']?></td>
    <td> <?php echo $row['Name']?></td>
    <td><?php echo $row['RollNo']?> </td>
    <td> <?php echo $row['Cgpa']?></td>
    <td><?php echo $row['Mobile']?></td>
    <td><?php echo $row['Gender']?></td>
    <td><?php echo $row['Branch']?></td>
    <td>students eligible for dell</td></tr><br>
    <?php
}
?>
</table>
</body>
</html>