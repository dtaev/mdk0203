<?php

require 'core/EquationInterface.php';
require 'core/LogInterface.php';
require 'core/LogAbstract.php';

require 'tsarev/LinearEquation.php';
require 'tsarev/QuadraticEquation.php';
require 'tsarev/MyLog.php';

$equation = new tsarev\QuadraticEquation();
try
{
    $result = $equation->solve(5, 14, 4);
    $str = implode("; ", $result);
    tsarev\MyLog::Instance()::log($str);
}
catch (Error $error)
{
    tsarev\MyLog::Instance()::log($error->getMessage());
}