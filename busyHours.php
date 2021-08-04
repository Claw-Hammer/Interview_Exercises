<?php

/*

Given an array representing hours, determine maximum number of hours that could be used at a stretch.

The array item could be either 0 or 1. 1 being a busy hour and 0 an idle hour. There is an additional integer parameter with count of extra busy hours. 

Write a function to find the maximum number of consecutive busy hours by replacing idle hours with the extra hours

Signature:
int findMaxBusyHours(int[] arr, int extraBusyHours)


for eg:
input parameters: [1,0,1,0,1,0,0,1,0,1], 2
output = 5 
explanation: putting extra hours (count: 2) at 1st and 3rd index will give 5 consecutive busy hours

Note: brute force method is not preferred

*/

$array = [1,0,1,0,1,0,0,1,0,1];
$extraBusyHours = 2;
$itemsReplaced = 0;
$previous = null;
$firstindex = null;
$secondindex = null;
$second = null;
$sum1 = null;
$sum2 = null;
$aux = 0;

for($i=0; $i < count($array); $i++) {

    if($extraBusyHours != 0) {

        if($array[$i] == 1) {

            $aux = $aux + $array[$i];

        } else {

            $aux = $aux + 1;
            $extraBusyHours -= 1;
            
            if ($firstindex == null) {
                $firstindex = $i;

            } else {                
                $secondindex = $i;                
            }
        }
    }

    if ($array[$i] != 0) {

        $sum1 = $aux +1;
        $second = $secondindex + 1;
    }

}

$extraBusyHours = 2;
$aux = 0;

for($i=$second + 1; $i < count($array); $i++) {

    if($extraBusyHours != 0) {

        if($array[$i] == 1) {

            $aux = $aux + $array[$i];

        } else {

            $aux = $aux + 1;
            $extraBusyHours -= 1;
            
            if ($firstindex == null) {
                $firstindex = $i;

            } else {                
                $secondindex = $i;                
            }
        }
    }

    if ($array[$i] != 0) {

        $sum2 = $aux +1;
    }
}

echo $sum1 . "\r\n";
echo $sum2;
// echo $second;
