<?php

require 'Chest.php';
require 'Lock.php';

//Due to the optional paramater for Chest, we can either do what is below
//or we could do new Lock(true) as the parameter for the chest constrcutor
$chest = new Chest(new Lock);
$chest->close(); 
$chest->open();

//One issue we get if we type in  new Chest('test') which will error out. We can fix this by doing something called type hinting
//This means that we declare the type of the parameter. 