<?php
function factorial(int $number){
    if($number < 0 ){
        echo "Enter Positive number.";
        return;
    }
    else{
        $fact = 1;
        for($i=2; $i<=$number; $i++){
            $fact = $fact * $i;
        }
        return $fact;
    }
}

$number = 8;
$result = factorial($number);
echo "Factorial of $number is : $result";



?>