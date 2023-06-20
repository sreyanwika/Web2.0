<html>
    <body>
        <?php
        include("connection.php");
         $que1="SELECT * FROM anantapur";
         $result1=mysqli_query($dbh,$que1)
         or
         die("error with connecting with query");
         echo"<br/>";
         echo"fetching success";
         while($row=mysqli_fetch_assoc($result1)){
             echo "CODE:".$row['code']."<br/>";
             echo "SAINAGAR:".$row['sainagar']."<br/>";
             echo "JESUSNAGAR:".$row['jesusnagar']."<br/>";
             echo "RAMNAGAR:".$row['ramnagar']."<br/>";
 
         }
         ?>
         </body>
         </html>