<?php

    $x = 1;
    try{
            while($x <= 20) {

                if( ($x % 3) == 0){

                    if( ($x % 5) == 0){
                        echo " FizzBuzz <br>";
                    }
                    else{
                        echo " Fizz <br>";
                    }
                }
                else if( ($x % 5) == 0){
                        if( ($x % 3) == 0){
                            echo " FizzBuzz <br>";
                        }
                        else{
                            echo " Buzz <br>";
                        }
                }
                else {
                    echo $x;
                }
                echo "<br>";
            $x++;

             }
    }catch(Exception $e) {
  echo 'Error Message: ' .$e->getMessage();
}
?>