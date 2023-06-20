<?php
 if($_REQUEST["name"]||$_REQUEST["age"]){
    echo"heyy ".$_REQUEST["name"]."<br/>";
    echo"age is:".$_REQUEST["age"]. "<br/>";
    exit();
 }
 ?>
 <html><body>
    <!post method..it wont display the data in the address bar>
    <form action="<?php $_PHP_SELF ?>" method="post">
     name:<input type="text" name="name"/>
     age:<input type="text" name="age"/>
     <input type="submit"/></form>
</body></html>