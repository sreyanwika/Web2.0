<?php
$a=array("Arjun","Ajay","Ayaana","Akash","Aadhya","Ciya","Catherine","Cane","Lilly","Kattyy","Rahul","Riya","varun","Vishnu","Nikhil","Zayn");
$q=$_REQUEST['q'];
$hint="";
if($q!==""){
    $q=strtolower($q);
    $len=strlen($q);
    foreach($a as $value){
        if(stristr($q,substr($value,0,$len))){
            if($hint==""){
                $hint=$value;
            }
            else{
                $hint .=",$value";
            }
        }
    }

}
echo $hint === "" ? "no suggestion" : $hint;

?>