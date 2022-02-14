<!-- 1. $color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,
● green
● red
● white -->

<?php
    $ary = array("white","green","red");
    foreach($ary as $values){
        if($values == "red"){
            echo "red";
        }else{
        echo "$values ,";
        }
    }
        $x = sort($ary);
        echo '<li>' . implode( '</li><li>', $ary) . '</li>';
?>