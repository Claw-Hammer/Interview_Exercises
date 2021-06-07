<?php

/*

Hi, here's your problem today. This problem was recently asked by Google:

Given a list of numbers with only 3 unique numbers (1, 2, 3), sort the list in O(n) time.

Example 1:
Input: [3, 3, 2, 1, 3, 2, 1]
Output: [1, 1, 2, 2, 3, 3, 3]

*/

$array = [3, 3, 2, 1, 3, 2, 1, 6, 8, 2, 1, 2, 8, 9];

for ($i = 0;$i < count($array);$i++) {

    for($j = $i+1;$j < count($array);$j++) {

        if($array[$i] > $array[$j]) {

            $aux = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $aux;
        }
    }
}

var_dump($array);