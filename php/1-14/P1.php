<?php
    require('P1.html');
    $total = 0;
    if(isset($_POST['submit'])){
    $a = $_POST['number'];
    for($i = 0; $i <= $a; $i++){
        if($i % 2 == 0){
            $total += $i;
            
        }
    }
}
    echo "Sum of all even number from 1 to $a is : <b> $total </b>";
    
?>