<!-- 12. Write code to print factorial of a number (number should be passed via
textbox)
Example of factorial : 5! = 5 * 4 * 3 * 2 * 1 = 120 -->

<?php  
    $num = $_POST['num'];  
    $factorial = 1;  
        for ($x=$num; $x>=1; $x--){  
            $factorial = $factorial * $x;  
    }  
    echo "Factorial of $num is $factorial";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task</title>
</head>
<body>
    <form method="post">
    <input type="text" placeholder="Enter number" id="num" name="num">
    </form>
</body>
</html>  