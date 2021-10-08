<?php  
// PHP code to get the Fibonacci series
// Recursive function for fibonacci series.
function Fibonacci($number): \Generator {
      
    // if and else if to generate first two numbers
    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      
    // Recursive Call to get the upcoming numbers
    else
    $it = new \RecursiveIteratorIterator((Fibonacci($number-1) + Fibonacci($number-2)));
        yield from $it;
}
  
// Driver Code
// $number = 100;
// for ($counter = 0; $counter < $number; $counter++) {  
//     echo Fibonacci($counter),' ';
// }
var_dump(Fibonacci(10));