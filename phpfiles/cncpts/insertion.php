<html>
    <body>
        <?php
        include("connection.php");
        //inserting values through php in to the db...
        $query="INSERT  INTO  anantapur(code,sainagar,jesusnagar,ramnagar) VALUES('ATP2000','10000','10020','11000')";
        $rel=mysqli_query($dbh,$query)
        or
        die("error with connecting with query");
        echo"<br/>";
        echo"insertion of values into table success";
        ?>
        </body>
        </html>