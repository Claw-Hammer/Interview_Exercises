<?php

namespace parse_csv;

require_once __DIR__ . '\vendor\autoload.php';

use ParseCsv\Csv;

class MyMerge
{
    private $_inputFile;
    private $_outputFile;
    protected $_csv;

    public function __construct(string $inputFile, string $outputFile)
    {
        $this->_inputFile = $inputFile;
        $this->_outputFile = $outputFile;
        $this->_csv = new Csv();
    }

    public function parseFiles()
    {
        $file = $this->_inputFile;
        $this->_csv->parseFile($file);
        // file_put_contents($this->_outputFile,'Account ID,First Name,Created On,Status,Status Set On' . PHP_EOL);
        $myArray = [];

        foreach($this->_csv->data as $line) {

            $data = $this->grabApiInfo($line["Account ID"]);
            $data = json_decode($data, true);
            $row = array($line["Account ID"], $line["First Name"], $line["Created On"], $data["status"], $data["created_on"]);
            array_push($myArray, $row);
        }

        $this->generateOutput($myArray);
    }

    private function grabApiInfo(string $accID) :string
    {
        $detail = file_get_contents("http://interview.wpengine.io/v1/accounts/{$accID}");
        return $detail;
    }


    private function generateOutput(array $data)
    {
        $this->_csv->linefeed = "\n";
        $this->_csv->save($this->_outputFile, $data, true);
    }
}



if (isset($argv[1]) && isset($argv[2])) {

    $input = trim($argv[1]);
    $output = trim($argv[2]);

    $res = new MyMerge($input, $output);
    print_r($res->parseFiles());
    echo PHP_EOL;

} else {

    echo "Yo must provide an Input file AND an output filename, please try again..!";
}