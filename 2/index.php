<?php


require 'Person.php';

//Use of class and properties
$person = new Person;
$person->name = "Brandon";
$person->age = "21+2";
echo $person->name, ' is ', $person->age, ' years old.<br>';

//Use of class, props, and sentence;
$person->name = "Brando";
$person->age = "23";
echo $person->sentence();

//Pre-use of class
$name = "Brandon";
$age = 23;

echo $name, ' is ', $age, ' years old.';