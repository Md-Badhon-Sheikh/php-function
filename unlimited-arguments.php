<?php
function sum(int ...$numbers){
    $result = 0;
    for($i=0; $i< count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}

echo sum(2,1,2,1,3,9);


?>