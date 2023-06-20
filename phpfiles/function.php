<?php
  $a=10;
  $b=12;
?>
<html><body>
    <?php
    function test(){
        global $a,$b;
        $z=$a+$b;
        echo $z;
    }
     ?>
     <p>the sum value is:</p>
     <?php
       test(); ?>
       </body>
       </html>