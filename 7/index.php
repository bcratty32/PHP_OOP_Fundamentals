<?php

require 'Collection.php';

$c = new Collection();

$c->add('foo');
$c->add('bar');

echo $c->toJson();

//GOAL: WANT TO BE ABLE TO COUNT UP OBJECT OF JSON 
echo count($c);//will return 1 since this is 1 object. So first step was to add implements Countable

echo json_encode($c);