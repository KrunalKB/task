<!-- 4. Print given below output using while loop
The product of 10 x 2 is 20
The product of 10 x 4 is 40
The product of 10 x 6 is 60
The product of 10 x 8 is 80
The product of 10 x 10 is 100 -->

<?php
    $i = 1;
    $j =10;
    while($i <= 10){
        if($i % 2 == 0){
        echo "The product of $j * $i = ". $j * $i ;
        echo "<br>";
        }
        $i++;
    }


?>