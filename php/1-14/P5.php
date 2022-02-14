<!-- 5. Given same array as above example
Print below output:
5
10
15 -->

<?php
    $arr_num = array(5, 10, 15, 20, 25);
    foreach($arr_num as $value){
        if($value < 20){
            echo $value;
            echo "<br>";
        }
    }

?>