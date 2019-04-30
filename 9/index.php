<?php

require 'Foo.php';
require 'Bar.php';

//This is from the first example of when we didnt use abstract
//$f = new Foo();
// echo $f->bar();

//Using abstract
$b =new Bar();
echo $b->baz();
//Since Foo is extended that means it is inherited and which means we can now call methods that belonged to Foo class
echo $b->bar();
echo $b->fooBar();