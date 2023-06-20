<html>
    <body>
        <?php
        include("connection.php");
        $query="CREATE TABLE anantapur(code VARCHAR(20) PRIMARY KEY,sainagar TEXT(20) NOT NULL,jesusnagar TEXT(20) NOT NULL,ramnagar TEXT(20) NOT NULL)";
        $rel1=mysqli_query($dbh,$query)
        or
        die("error with connecting with query");
        echo"<br/>";
        echo"creation of table success";
        ?>
        </body>
        </html>