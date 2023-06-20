<html>
    <body>
        <?php
        include("connection.php");
        $query="SELECT * from bangalore";
        $rel=mysqli_query($dbh,$query)
        or
        die("error with connecting with query");
        echo"<br/>";
        echo"fetch success";
        echo"<br/>";
        while($row=mysqli_fetch_assoc($rel)){
            echo "CODE:".$row['code']."<br/>";
            echo "JAYANAGAR:".$row['jayanagar']."<br/>";
            echo "YELAHANKA:".$row['yelahanka']."<br/>";
            echo "BTM:".$row['btm']."<br/>";

        }
        
        ?>
        </body>
        </html>