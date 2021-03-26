<?php

ini_set("display_errors", 1);
error_reporting (-1);

require __DIR__.'/vendor/autoload.php';

$equation = new tsarev\QuadraticEquation();
try
{
    tsarev\MyLog::log("Version: " . trim(file_get_contents("version")) . "\n");
    echo "Enter 3 values \n\r";

    $a = readline("Enter a: \n\r");
    $b = readline("Enter b: \n\r");
    $c = readline("Enter c: \n\r");

    tsarev\MyLog::log("Equation: x=".$a."x2+".$b."x+".$c."\n\r");

    $result = $equation->solve($a, $b, $c);

    $str = implode("; ", $result);

    tsarev\MyLog::log("Solution: ".$str."\n\r");
}
catch (tsarev\tsarevException $error)
{
    tsarev\MyLog::log($error->getMessage());
}
tsarev\MyLog::write();