<?php


require 'Person.php';


//Used with basic constructor #1 aka the constructor with no params
// $person = new Person;
// $person->name = "Brando";
// $person->age = "23";
// echo $person->sentence();

//Used with Constructor #2
$newPerson = new Person("Brando", "23");

echo $newPerson->sentence();