<?php


//require_once works the same way as require but the only difference is that it checks for the file. 
//If the file is there then it wont re-add the file.
require_once 'classes/Calculator.php';

require_once 'classes/OperationInterface.php';
require_once 'classes/Adder.php';
require_once 'classes/Subtractor.php';
require_once 'classes/Multiplier.php';
require_once 'classes/Divider.php';

$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(20,30); //50

$c->setOperation(new Divider);
$c->calculate(2); //25

$c->setOperation(new Subtractor);
$c->calculate(5); //20

$c->setOperation(new Multiplier);
$c->calculate(5); //100

echo $c->getResult();