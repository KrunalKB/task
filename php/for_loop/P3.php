<!-- 3. Create a script to construct the following pattern, using nested for loop.
*
* *
* * *
* * * *
* * * * * -->

<?php
    for($a=0;$a<5;$a++){
        for($b=0;$b<=$a;$b++){
             echo "* &nbsp;";
        }
        echo "<br>";
    }
?>