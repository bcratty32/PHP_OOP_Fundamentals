<?php

// Lesson 1
$object = new stdClass;
$object->name = 'Brandon';
$object->names = ['Brandon', 'Billy', 'Bobby'];
echo $object->name;

foreach($object->names as $name){
    echo $name, '<br>';
}