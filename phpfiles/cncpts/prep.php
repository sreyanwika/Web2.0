<html>
    <body>
        <?php
        echo"hyyy";
        echo"<br/>";
        print("hmmm....");
        echo"<br/>";
        $x=10;$y=11;
        echo "the sum of x and y is:".$x+$y."<br/>";
        function sub(){
            //global variables....
            global $x,$y;
            $y=$y-$x;
            echo "the sub of x and y is:".$y."<br/>";
        }
        sub();
        function increment(){
            static $x=0;
            echo $x."<br/>";
            $x++;
        }
        increment();
        increment();
        increment();
        increment();
        define("MYDOB",2005);
        echo MYDOB;
        $day=array("mon"=>1,"tue"=>2,"wed"=>3);
        echo "the monday value is:".$day['mon'];
        ?>
</body>
    </html>