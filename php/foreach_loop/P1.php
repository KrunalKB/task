<!-- 1. Given below array:
$fruits = array("Orange","Apple","Banana","Cherry","Mango");
expected Output :
Orange
Apple
Banana
Cherry
Mango -->

<?php
    $fruits = array("Orange","Apple","Banana","Cherry","Mango");
    foreach($fruits as $values){
        echo $values;
        echo "<br>";
    }
?>