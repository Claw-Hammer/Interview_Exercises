<?php

include __DIR__ . '\MyMerge.php';

use App\MyMerge;

if (
    (isset($argv[1]) && isset($argv[2])) &&
    (preg_match("/^.*\.(csv|CSV)$/", $argv[1]) === 1 && preg_match("/^.*\.(csv|CSV)$/", $argv[2]) === 1)
) {

    $input = trim($argv[1]);
    $output = trim($argv[2]);

    $res = new MyMerge($input, $output);

    try {

        $res->parseFile();

    } catch (Exception $e) {

        echo "There was an issue processing your request: {$e->getMessage()}";
    }

} else {

    echo "You must provide a CSV Input file AND a CSV Output filename like this: 
    wpe_merge {Input file}.csv {Output file}.csv, please try again..!";
}
