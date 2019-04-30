<?php

require 'Foo.php';

$f = new Foo();
$f->bar();
//Example of method chaining. Notice how I am calling 2 methods on top of each other
$f->bar()->baz();