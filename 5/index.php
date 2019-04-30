<?php

require 'Bird.php';
require 'Pigeon.php';
require 'Penguin.php';

$penguin = new Penguin(false, 2);

//Notice the output
$penguin->foo();

//Change the legCount properitie in Bird.php to protected and rerun. Observer the result
//This is why we use getters and setter to get around this.