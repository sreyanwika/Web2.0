<html>
    <body>
        <?php
        $name=$_GET['name'];
        $age=$_GET['age'];
        if($_GET["name"] || $_GET["age"])
        echo " the name is".$name." the age is:$age";
        ?>
</body>
</html>