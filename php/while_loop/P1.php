<!-- 1. Print below output using while loop :
Executing - counter is 1.
Skipping number 2 because it is even.
Executing - counter is 3.
Skipping number 4 because it is even.
Executing - counter is 5.
Skipping number 6 because it is even.
Executing - counter is 7.
Skipping number 8 because it is even.
Executing - counter is 9.
Skipping number 10 because it is even -->

<?php
    $i=1;
    while($i <= 10){
        if($i % 2 != 0){
            echo "Executing - counter is $i. <br>";
        }else{
            echo "Skipping number $i because it is even. <br>";
        }
        $i++;
    }
?>