<html>
    <body>
        <?php
        include("connection.php");
        $code=$_POST['code'];
        $sainagar=$_POST['sainagar'];
        $ramnagar=$_POST['ramnagar'];
        $jesusnagar=$_POST['jesusnagar'];
        $quee="INSERT INTO anantapur(code,sainagar,ramnagar,jesusnagar) VALUES('$code','$sainagar','$ramnagar','$jesusnagar')";
        $res=mysqli_query($dbh,$quee)
        or
        die("error with query..");
        echo "successs..";
        ?>
        </body>
        </html>