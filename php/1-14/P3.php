<!-- 3. Given below array :
$arr_variable = array ('PHP','MySQL','Java');
Print below output using for loop:
The output of for loop should be as given below :
The element [0]:PHP
The element [1]:MySQL
The element [2]:Java -->

<?php
    $i = 0;
    $arr_variable = array ('PHP','MySQL','Java');
    foreach($arr_variable as $value){
        echo "The element [$i] : $value";
        echo "<br>";
        $i++;
    }
?>