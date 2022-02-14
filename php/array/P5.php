<!-- 5. Write a PHP script to calculate and display average temperature, five lowest and
highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6
List of seven lowest temperatures : 60, 62, 63, 63, 64,
List of seven highest temperatures : 76, 78, 79, 81, 85, -->

<?php
    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
    $temp_array = explode(',', $month_temp);
    $tot_temp = 0;
    $temp_array_length = count($temp_array);
        foreach($temp_array as $temp)
        {
        $tot_temp += $temp;
        }
    $avg_high_temp = $tot_temp/$temp_array_length;
    echo "Average Temperature is : ".$avg_high_temp." ";
    echo "<br>"; 
    sort($temp_array);
    echo " List of five lowest temperatures :";
    for ($i=0; $i< 5; $i++)
    { 
    echo $temp_array[$i].", ";
    }
    echo "<br>";
    echo "List of five highest temperatures :";
    for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
    {
    echo $temp_array[$i].", ";
    }
?>