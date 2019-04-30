<?php
//The previous example was us using other interfaces. This example will show us how to create our own interface.
//Interface files have 3 naming conventions, IFoo, FooInterface, I_Foo
require 'TalkInterface.php';
require 'Dog.php';
require 'Cat.php';

$dog = new Dog();
$cat = new Cat();

echo $cat->talk(), "<br>", $dog->talk();