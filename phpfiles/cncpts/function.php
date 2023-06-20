<html>
    <body>
        <?php
         function message(){
            echo "you r looking prettyy...</br>";
         }
         message();
         //function with parameters...
         function add($num1,$num2){
            $sum=$num1+$num2;
            echo "sum is:$sum</br>";
         }
         add(11,12);
         //using reference passing arguments...
         function add1($x){
            $F="s";
            $x=$x."".$F;
           echo "the name is:$x</br>";
         }
         function add2(&$x){
            $F="sre";
            $x=$x."".$F;
         }
         $name="poorvi";
         add1($name);
         echo "the name is:".$name."</br>";
         add2($name);
         echo "the name is:".$name."</br>";
         //returning values
         function ret($n,$n1){
            $sum1=$n+$n1;
            return $sum1;
         }
         $res=ret(12,13);
         echo "the sum value is:$res";
         ?>
</body>
</html>