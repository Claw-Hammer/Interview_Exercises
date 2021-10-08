WP Engine Code Test:

For this exercise, although I could use some libraries to parse csv files such as ParseCsv or CSV parser/generator, I preferred to use pure PHP code to demonstrate the capabilities of the language.

This script was developed under Windows 10 using a LAMP stack (PHP 7.3.16)

Requirements:

PHP 7.1 or higher
Composer

Installation:

Please run 'composer install' inside the 'wp_engine_test' folder, this will install PHPUnit and all the necessary dependencies.

Running the script:

In the command line, inside the 'wp_engine_test' folder, please run  'wpe_merge {Input file}.csv {Output file}.csv', where {Input file} and {Output file}
can be any desired filenames (it's important to use only csv or CSV as the filename extension in both cases).

Running the test:

Please run 'composer run test' inside the 'wp_engine_test' folder