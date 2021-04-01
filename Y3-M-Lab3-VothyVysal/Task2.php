<?php
    echo "<h3>Task2</h3>";
    $arr = [2,3,4,6,7,9,11,20];
    function getEvenNumber($var){
        // even number happen when the number modulo 2 equal 0  
        if($var % 2 == 0){
            return $var;
        }
    }
    print_r(array_filter($arr,"getEvenNumber")); 
?>