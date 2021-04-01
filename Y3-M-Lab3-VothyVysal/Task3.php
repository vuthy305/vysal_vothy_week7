<?php 
    echo "<h3>Task3</h3>";
    //... use this three point to access variable argument and convert it in to array
    function sum(...$num){
        $result = 0;
        // use foreach to access element in array
        foreach($num as $val){
            $result += $val;
        }
        return $result;
    }
    $total = sum(2,3);
    echo "The result of sum(2,3) is: "." ".$total ."<br>";
    $total = sum(2,3,4);
    echo "The result of sum(2,3,4) is: "." ".$total ."<br>";
    $total = sum(2,3,4,5);
    echo "The result of sum(2,3,4,5) is: "." ".$total ."<br>";
?>