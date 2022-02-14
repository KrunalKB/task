<!-- 10. Print below output using for loop
5
5 4
5 4 3
5 4 3 2
5 4 3 2 1 -->

<?php
   for($a=5;$a>=1;$a--){
        for($b=5;$b>=$a;$b--){

            echo "$b &nbsp;";
        }
        echo "<br>";
    }   
?>