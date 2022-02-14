<!-- 4. Given this array : $arr_num = array(5, 10, 15, 20, 25);
Print below output:
5
10
15
20
25
Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 40 [4] => 50 ) -->

<?php
    $arr_num = array(5, 10, 15, 20, 25);
    foreach($arr_num as $value){
        echo $value;
        echo "<br>";
    }
    print_r($arr_num);

?>