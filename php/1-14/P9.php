<!-- 9. Print below output using for loop
1 2 3 4 5
1 2 3 4
1 2 3
1 2
1 -->


<?php
   for($a=5;$a>=1;$a--){
        for($b=1;$b<=$a;$b++){

            echo "$b &nbsp;";
        }
        echo "<br>";
    }   
?>