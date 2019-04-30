<?php

// require_once 'classes/Calculator.php';
// require_once 'classes/OperationInterface.php';
// require_once 'classes/Adder.php';
// require_once 'classes/Subtractor.php';
// require_once 'classes/Multiplier.php';
// require_once 'classes/Divider.php';

//Notice how this could possibly get hundreds of lines long.
//We dont want that to happen so we will use the following
//Note: Autoload can only be done because our filename is the same name as the classes.

spl_autoload_register(function($class){
    
    //This will error out so notice the output
    //echo $class;
    //The above output statement shows us that it is recognizing the class but we arent
    // requiring it yet. So this is why we have the following
    require_once "classes/{$class}.php";
});