<?php

require 'Collection.php';

$c = new Collection();

$c->add('foo');
$c->add('bar');

$c->baz = 'qux';

//echo json_encode($c);
//Shows how the new value has been added
//echo "<pre>".print_r($c->all(), true)."</pre>";

//Shows how we can use get
//echo $c->baz;

//Shows us how the __call works
//echo $c->foo("bar", "touch", "qux"); 

//__toString 
echo $c;