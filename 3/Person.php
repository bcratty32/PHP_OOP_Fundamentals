<?php

class Person {
    public $name;
    public $age;

    /*
    NOTE: This is a constructor, aka a construct method, which is also known as a magic method.
    All magic methods have a '__' attached to the beginning. Some examples of these are __get and __set.
    A construct method is called when the object is created. So here is where we would want to initialize any of our props.
    */

    //Basic example to show how it works #1
    // public function __construct(){
    //     echo 'Constructed<br>';
    // }

    //Example of constructor with Params #2
    public function __construct($name, $age){
        echo 'Constructed<br>';
        $this->name = $name;
        $this->age = $age;
    }

    public function sentence(){
        echo 'Sentence Function:', $this->name, ' is ', $this->age, ' years old.<br>';
    }
}