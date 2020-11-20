<?php

ini_set("display_errors", 1);
error_reporting (-1);

require 'core/EquationInterface.php';
require 'core/LogInterface.php';
require 'core/LogAbstract.php';

require 'tsarev/LinearEquation.php';
require 'tsarev/QuadraticEquation.php';
require 'tsarev/MyLog.php';
require 'tsarev/tsarevException.php';

$equation = new tsarev\QuadraticEquation();
try
{
    echo "Enter 3 values \n\r";

    $a = readline("Enter a: \n\r");
    $b = readline("Enter b: \n\r");
    $c = readline("Enter c: \n\r");

    tsarev\MyLog::Instance()::log("Equation: x=".$a."x2+".$b."x+".$c."\n\r");

    $result = $equation->solve($a, $b, $c);

    $str = implode("; ", $result);

    tsarev\MyLog::Instance()::log("Solution: ".$str."\n\r");
}
catch (tsarev\tsarevException $error)
{
    tsarev\MyLog::Instance()::log($error->getMessage());
}
tsarev\MyLog::write();