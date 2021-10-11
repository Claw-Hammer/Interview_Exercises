<?php

//rotate the given matrix 90 degree to the right

$myMatrix = array(
    
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,0,1,2),
    array(3,4,5,6)
);

$myNewMatrix = [];

for($i = 0; $i < count($myMatrix); $i++) {
  
  $auxArray = [];

  foreach ($myMatrix as $matrixElement) {

      array_push($auxArray, $matrixElement[$i]);
  }
  
  array_push($myNewMatrix, array_reverse($auxArray));
  
}

print_r($myNewMatrix);
