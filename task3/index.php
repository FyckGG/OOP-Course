<?php

require './Operation.php';
require './Plus.php';
require './Minus.php';
require './Multiplication.php';
require './Division.php';

$a = 17;
$b = 200;

$plus = new Plus();
$minus = new Minus();
$multiplication = new Multiplication();
$division = new Division();

echo $plus->getName() . "\n";
echo $plus->getSign() . "\n";
echo $plus->getResult($a, $b) . "\n";
echo '------------------' . "\n";

echo $minus->getName() . "\n";
echo $minus->getSign() . "\n";
echo $minus->getResult($a, $b) . "\n";
echo '------------------' . "\n";

echo $multiplication->getName() . "\n";
echo $multiplication->getSign() . "\n";
echo $multiplication->getResult($a, $b) . "\n";
echo '------------------' . "\n";

echo $division->getName() . "\n";
echo $division->getSign() . "\n";
echo $division->getResult($a, $b) . "\n";
echo '------------------' . "\n";