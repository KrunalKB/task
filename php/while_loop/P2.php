<!-- 2. Print only even numbers from 1 to 100 and skip all numbers that are divisible by 3. -->

<?php
    $i = 1;
    while($i<=100){
        $i++;
        if($i % 2 == 0){
            if($i % 3 == 0){
                continue;
            }
            else{
                echo "$i <br>";
            }
        }
    }
?>