<html>
    <body>
        <form>
            Enter d name:<input type="text" name="name"/>
            Enter d class:<input type="text" name="class"/>
            <input type="submit" name="enter" value="enter"/>
</form>
<?php
$name=$_GET['name'];
$class=$_GET['class'];
echo " the name of the person is $name and studying in $class";
?>
</body>
</html>