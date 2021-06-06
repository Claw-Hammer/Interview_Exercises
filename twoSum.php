<?php

/*
You are given a list of numbers, and a target number k. Return whether or not there are two numbers in the list that add up to k.

Example:
Given [4, 7, 1 , -3, 2] and k = 5,
return true since 4 + 1 = 5.
*/

$array = [4, 7, 1 , -3, 2];
$k = 8;

for ($i=0; $i < count($array); $i++) {  

    for ($j=$i+1; $j < count($array); $j++) { 
        
        if ($array[$i] + $array[$j] == $k) {

            echo "La suma de {$array[$i]} + {$array[$j]} es igual a {$k}" . "<br>";
            exit;    
        }
    }
    
}

// a pesar de que hay que devolver 'true' preferí devolver una cadena para mostrar en qué caso es que se cumple la validación