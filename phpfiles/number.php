<html>
    <body>
        <form>
            <label>enter the fist num:</label>
            <input type="number" name="number1"><br>
            <label>enter the second num:</label>
            <input type="number" name="number2"><br>
            <input type="submit" name="submit" value="Add">
        </form>
        <?php
       $num1=$_GET['number1'];
    $num2=$_GET['number2'];
       $sum=$num1+$num2;
    echo $sum;
     ?>
    </body>
</html>