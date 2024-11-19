<?php
function serve($foodType="Tea", $numberOfItem = "1 Cup"){
    echo "{$numberOfItem} of {$foodType} has/have been served";
}
$food = "Coffee";
$num = "2 Cups";

serve($food);



?>