<html><body><?php
 if($_GET["name"]||$_GET["age"]){
    echo"heyy ".$_GET["name"]."<br/>";
    echo"age is:".$_GET["age"]. "<br/>";
    $nme=$_GET["name"];
    echo"heyy $nme";
    exit();
 }
 ?>
 </body></html>