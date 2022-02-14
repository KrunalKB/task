<!-- 2. gven below array :
$personal_details = array("name"=>"Rajesh Rao", "occupation" => "Engineer",
age => 39, "country" => "India");
expected Output :
name=Rajesh Rao
occupation=Engineer
age=39
country=India -->


<?php
    $personal_details = array("name"=>"Rajesh Rao", "occupation" => "Engineer",
    "age" => 39, "country" => "India");

    foreach($personal_details as $x => $values){
        echo "$x = $values <br>";
    }
?>