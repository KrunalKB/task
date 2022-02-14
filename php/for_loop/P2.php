<!-- 2. Create a script using a for loop to add all the integers between 0 and 30 and
display the total . -->

<?php
$total = 0;
    for($a=1;$a<=30;$a++){
       $total += $a; 
    }
    echo " The sum of all the integers between 0 to 30 is:  <b>$total</b>";
?>