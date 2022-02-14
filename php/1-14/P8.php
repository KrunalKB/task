<!-- 8. Print below output using for loop
1
2 1
3 2 1
4 3 2 1 -->

<?php

   for($a=1;$a<=4;$a++){
        for($b=$a;$b>=1;$b--){ 
            echo "$b  &nbsp;";
        }
        echo "<br>";
    }   
?>