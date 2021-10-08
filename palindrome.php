<?php

class palindrome
{
    public function parse(string $word)
    {
        $flipStr = strrev($word);

        if($flipStr === $word) {
            return true;
        }

        return false;
    }
}


$elements = [
    'aba',
    'cdc',
    'rar',
    'racecar',
    'tacocat',
    'abba',
    'radio',
    'body',
    'red'
];

$test = new palindrome();

foreach ($elements as $element) {

    $s = $test->parse($element);
    $res = $s == true ? "{$element} is a palindrome" : "{$element} IS NOT a palindrome";
    echo "{$res} <br/>";
}
