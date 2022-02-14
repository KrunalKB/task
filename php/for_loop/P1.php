<!-- 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
hyphen(-) at the starting and ending position. -->

<?php 
   $ary = array("1","2","3","4","5","6","7","8","9","10");
   
   foreach($ary as $value){
       if($value == 10){
           echo $value;
       }else{
           echo $value . "-";
       }
       
   }
?>