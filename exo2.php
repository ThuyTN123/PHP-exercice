<?php

$num1 = 0;
$num2 = 10;

$operation = "dzqgjdfzj";
$result = 0;

$testnum = "10";

if ($num2 === $testnum) {
    $result = "OK";
}

if ($operation == "+") {
    $result = $num1 + $num2;
}
if ($operation == "-") {
    $result = $num1 - $num2;
}
if ($operation == "/") {
    $result = $num1 / $num2;
}
if ($operation == "*") {
    $result = $num1 * $num2;
}
echo $result;