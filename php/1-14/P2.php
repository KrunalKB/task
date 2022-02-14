
<!-- 2. Print all even numbers between 1 to 100 using while loop. -->

<?php
    $a=1;
    while($a<=100){
        if($a % 2==0){
            echo "$a";
            echo"<br>";
        }
        $a++;    
    }
?>