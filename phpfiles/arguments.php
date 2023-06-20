 <html><body>
    <?php
     function sum($num){
        $num+=3;
        echo $num."<br/>";

     }
      //returning value
     function sub(&$num){
        $num-=1;
        return $num;

     }
     $value=20;
     //callby value
     sum($value);
     echo"the original value is:".$value."<br/>";
     //call by reference...the original will be effected
    sub($value);
    echo"the original value is:$value<br/>";
    //returning value
    $RTRNVLU=sub($value);
    echo"the returned value is:$RTRNVLU";
    ?>
</body></html>