<?php

require 'Bird.php';
require 'Pigeon.php';
require 'Penguin.php';
//Example 1: Bird Class and its methods
$bird = new Bird(true, 2);
echo $bird->getLegCount();

//Example 2: Pigeon Class inheriting Bird Class props and methods
$pigeon = new Pigeon(true, 2);
// echo $pigeon->getLegCount();
// echo $pigeon->canFly();

If($pigeon->canFly()){
    echo "can fly";
}
else{
    echo "cant fly";
}

//Example 3: Penguin Class inheriting 
$penguin = new Penguin(false, 2);
// echo $pigeon->getLegCount();
// echo $pigeon->canFly();

if($penguin->canFly()){
    echo "can fly";
}
else{
    echo "cant fly";
}