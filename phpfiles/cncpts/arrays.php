<html>
    <body>
        <?php
        $word[0]="apple";
        $word[1]="aero";
        $word[2]="ant";
        $word[3]="aunty";
        foreach($word as $rel){
            echo "the word is :$rel</br>";
        }
        ?>
        <!--associative array-->
        <?php
        $sal=array("sreya"=>50000,"adita"=>50000,"jyothi"=>60000,"poorvi"=>70000,"hareeyan"=>40000,"kavya"=>50000);
           //concatenate two string variables....
        echo "the salary of poorvi is". $sal['poorvi']."the salary of hareeyan is ".$sal['hareeyan'];
        ?>
</body>
</html>