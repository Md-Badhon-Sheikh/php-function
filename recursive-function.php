<?php
function printN($i){
    if($i >=10){
        return;
    }
    echo $i. "\n";
    $i++;
    printN($i);
}
// printN(1);

function recursion($startNumber, $endNumber, $stepping=1){
    if($startNumber > $endNumber){
        return;
    }
    echo $startNumber. "\n";
    $startNumber += $stepping;
    recursion($startNumber, $endNumber, $stepping);
}
recursion(21,30,5);








?>