<?php 
function run(){
    static $x=0;
    echo $x;
    echo "</br>";
    $x++;
}
run();
run();
?>