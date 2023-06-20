<html>
    <body>
        <?php
        $db_host='localhost';
        $db_root='VYM';
        $db_pswrd='Veena1234';
        $db_name="city";
        $dbh=mysqli_connect($db_host,$db_root,$db_pswrd,$db_name)
        or
        die("error with connecting to db");
        echo"connection success...";
        ?>
        </body>
        </html>