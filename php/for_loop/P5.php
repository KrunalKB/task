<!-- 5. Write a PHP program to generate and display the first n lines of a Floyd triangle.
(use n=5 and n=11 rows).
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15 -->

<?php
    $num=0;
    $x=1;
    for($a=1;$a<=5;$a++){
        for($b=1;$b<=$a;$b++){
            $num += $x;
            echo "$num &nbsp;";
        }
        echo "<br>";
    }
?>