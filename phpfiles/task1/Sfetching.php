<html><body>
    <?php
include("studentcnct.php");//imnclue fun is used to copy other file content
$query="select * from student where CGPA>6.5";//db query
$result=mysqli_query($dbh,$query)//mysqli_query is a builtin func ,$dbh is useed in coonection.php in order to connect to db
or
die("Error with querying the db");//works when there is any p-0rob with the query
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
</tr>
    <?php
while($row=mysqli_fetch_assoc($result)){//mysqli_fetch_assoc is a buitlin func to fetch data n assoc is associative array ,while is used bcz we dont know hw mny rows r there
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
    <td><?php echo $row['Branch']?></td></tr>
    <?php
}
?>
</table>
</body>
</html>