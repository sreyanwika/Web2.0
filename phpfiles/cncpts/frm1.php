<html>
    <body>
        <form>
            Enter the AGE:
            <input type="age" name="age"/>
            <input type="submit" value="add"/>
</form>
<?php
$age=$_GET['age'];
$age+=10;
echo "the age of person after 10 years:$age";
?>
</body>
</html>