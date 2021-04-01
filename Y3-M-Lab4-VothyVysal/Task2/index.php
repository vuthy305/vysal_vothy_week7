<?php 
    require_once (__DIR__. '/Model/ABA.php');
    require_once (__DIR__. '/Model/Pipay.php');
    require_once (__DIR__. '/Model/Wing.php');

    echo "<h3>Calculate Number Of Sale</h3>";
    // Number1
    echo "<h4>1. Number of sales by ABA method</h4>";
    $sales = [new ABA('item1',5,1),new Wing('item2',3,2),new ABA('item3',4,1),new ABA('item4',5,1),
              new Pipay('item5',6,1),new ABA('item6',10,1),new  Wing('item7',15,1),new Wing('item8',2,1)];
    $total = 0 ; $total_for_pipay_and_wing = 0;  
    echo "<table border=\"3\"><tr><th>Item</th><th></th><th>Price</th><th>Quantity</th><th>Method</th><th>Total</th></tr>";
    foreach($sales as $sale){
        if($sale->getType()==='ABA'){
            echo "<tr>";
                echo "<td>".$sale->getItem()."<td>";
                echo "<td>".$sale->getPrice()."</td>";
                echo "<td>".$sale->getQuantity()."</td>";
                echo "<td>".$sale->getType()."</td>";
                echo "<td>".$sale->getSaleAmount()."</td>";
            echo "</tr>"; 
        }   
    }
    echo "</table>";        
    foreach($sales as $sale){
        if($sale->getType()==='ABA'){
            $total += $sale->getSaleAmount();
        }
    }          
    echo "<p>Total Amount of Sale By ABA method is : <strong>$total $</strong></p>";
    // Number2
    echo "<h4>2. Number of sales by Pipay and Wing method</h4>";
    echo "<table border=\"3\"><tr><th>Item</th><th></th><th>Price</th><th>Quantity</th><th>Method</th><th>Total</th></tr>";
    foreach($sales as $sale){
        if($sale->getType()==='Pipay'||$sale->getType()==='Wing'){
            echo "<tr>";
                echo "<td>".$sale->getItem()."<td>";
                echo "<td>".$sale->getPrice()."</td>";
                echo "<td>".$sale->getQuantity()."</td>";
                echo "<td>".$sale->getType()."</td>";
                echo "<td>".$sale->getSaleAmount()."</td>";
            echo "</tr>"; 
        }   
    }
    echo "</table>"; 
    foreach($sales as $sale){
        if($sale->getType()==='Pipay'||$sale->getType()==='Wing'){
            $total_for_pipay_and_wing += $sale->getSaleAmount();
        }
    } 
    echo "<p>Total Amount of Sale By ABA method is : <strong>$total_for_pipay_and_wing $</strong></p>";
    // Number3
    echo "<h4>3. Display all sales ordering by biggest total amount</h4>";
    usort($sales, function ($t1, $t2) {
        return $t2->getSaleAmount() <=> $t1->getSaleAmount();
    });
    echo "<table border=\"3\"><tr><th>Item</th><th></th><th>Price</th><th>Quantity</th><th>Method</th><th>Total</th></tr>";
    foreach($sales as $sale){
            echo "<tr>";
                echo "<td>".$sale->getItem()."<td>";
                echo "<td>".$sale->getPrice()."</td>";
                echo "<td>".$sale->getQuantity()."</td>";
                echo "<td>".$sale->getType()."</td>";
                echo "<td>".$sale->getSaleAmount()."</td>";
            echo "</tr>";   
    }
    echo "</table>"; 
?>