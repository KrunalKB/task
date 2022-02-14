<!-- 4. array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key -->

<?php
    $ary = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    asort($ary);

    foreach($ary as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "<hr>";
    ksort($ary);
    foreach($ary as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "<hr>";
    arsort($ary);  
    foreach($ary as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    } 
    echo "<hr>";
    krsort($ary); 
    foreach($ary as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    } 



?>