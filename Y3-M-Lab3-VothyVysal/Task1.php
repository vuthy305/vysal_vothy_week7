<?php
    echo "<h1>Task1</h1>";
    
    $str="emocleW ot PHP";
    // Break one word one word from string and store in arr by using explode and set condition " " becuase our
    // word in string is using space from each other
    $arr = explode(" ", $str);
    $result = '';
    
    // loop through the array
    for($i=0 ; $i<count($arr) ; $i++){
        // reverse each word that located in array and connect string with result
        $result.=strrev($arr[$i])." ";
    }
    echo "The reverse value of '$str' is :"." ".$result;    
?>