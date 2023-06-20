<html>
    <body>
        <?php
        include("connection.php");
        $que="SELECT * FROM anantapur";
        $res=mysqli_query($dbh,$que)
        or 
        die("error with the query");
        echo"<br/>";
        echo "success";
        while($row=mysqli_fetch_assoc($res)){
            echo "CODE:".$row['code']."<br/>";
             echo "SAINAGAR:".$row['sainagar']."<br/>";
             echo "JESUSNAGAR:".$row['jesusnagar']."<br/>";
             echo "RAMNAGAR:".$row['ramnagar']."<br/>";
        }
        ?>
        </body>
        </html>