<?php

namespace App;

use Exception;

class MyMerge
{
    protected $inputFile;
    protected $outputFile;


    public function __construct(string $inputFile, string $outputFile)
    {
        $this->inputFile = $inputFile;
        $this->outputFile = $outputFile;
    }


    /**
     * Parses the provided csv input file and merges
     * the info with the data from the API call
     * generating a new csv file with the provided
     * csv output file name
     * @return void
     * @throws Exception
     */
    public function parseFile(): void
    {
        if (($file = fopen($this->inputFile, "r")) !== false) {

            $header_row = fgetcsv($file, 0, ",", "\"", "\"");
            file_put_contents($this->outputFile, 'Account ID,First Name,Created On,Status,Status Set On' . PHP_EOL);

            while (($data_row = fgetcsv($file, 0, ",", "\"", "\"")) !== false) {

                $data = $this->grabApiInfo($data_row[0]);
                $data = json_decode($data, true);
                file_put_contents(
                    $this->outputFile,
                    "{$data_row[0]}, {$data_row[2]}, {$data_row[3]}, {$data['status']}, {$data['created_on']}"
                    . PHP_EOL,
                    FILE_APPEND
                );
            }
        }

        fclose($file);
    }


    /**
     * Fetch the Account info from the API
     * @param string $accID
     * @return string
     * @used-by parseFile()
     * @throws Exception
     */
    private function grabApiInfo(string $accID): string
    {
        return file_get_contents("http://interview.wpengine.io/v1/accounts/{$accID}");
    }
}
