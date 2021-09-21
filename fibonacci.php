<?php  
echo "<b>Assuming that Fibonacci series starts from the 0'th term </b><br>";

function fibonacci($value){
    

    $term =$value;
    $value = $value-1;
    $num = 0;  
    $n1 = 0;  
    $n2 = 1; 
    if($term == 0){
        echo "<p> The $term'th term in the Fibonacci series  is:   $n1</p>";
    }
    elseif($term == 1) {
        echo "<p> The $term'th term in the Fibonacci series  is:  $n2 </p>";
    }
    else if($term >1){
            echo "<p> The $term'th term in the Fibonacci series  is   :";   
            while ($num < $value )  
            {  
                $n3 = $n2 + $n1;  
                $n1 = $n2;  
                $n2 = $n3;  
                $num++; 
            } 
            echo $n3." </p>"; 
        }
    }

fibonacci(5);
fibonacci(10);
fibonacci(1);
?> 