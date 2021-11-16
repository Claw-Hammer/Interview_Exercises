<?php  

function fibonacciRecursive($number)
{      
    if ($number <= 1) {
        return $number;
    }

    return (fibonacciRecursive($number-1) + fibonacciRecursive($number-2));
}


function fibonacciSequential($n)
{
    if ($n <= 1) {
        return $n;
    }

    $n2 = 0;
    $n1 = 1;

    for ($i = 2; $i < $n; $i++) {
        
        $n2_ = $n2;
        $n2 = $n1;
        $n1 = ($n1 + $n2_);
    }

    return $n2 + $n1;
}


function startFibonacci($number)
{
    for ($counter = 0; $counter <= $number; $counter++) {  
        // echo fibonacciRecursive($counter) . ' ';
        echo fibonacciSequential($counter) . ' ';
    }
}


$start=microtime(true);

    startFibonacci(50);

$end=microtime(true);

$time = (int)(($end-$start)*1000)."ms -> " . number_format($end - $start,12);

echo "<br/><br/>";
echo "Processing time: {$time} \r\n";

