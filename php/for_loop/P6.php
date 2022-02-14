<!-- 6. Create a script to construct the following pattern, using a nested for loop
    *
   * *
  * * *
 * * * *
* * * * * -->

<?php  
    for($i=0;$i<=5;$i++){  
        for($j=5;$j>=$i;$j--){  
            echo "&nbsp";  
        }  
        for($k=1;$k<=$i;$k++){  
            echo "* ";  
        }  
    echo "<br>";  
    }  
  
?> 