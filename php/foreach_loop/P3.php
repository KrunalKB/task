<!-- 3. Given below array
$myArray = array(87,75,93,95);
print sum of all the element in array. -->

<?php
    $x = 0;
    $myArray = array(87,75,93,95);
    foreach($myArray as $values){
        $x += $values;  
    }
    echo "Sum is : $x";
?>