<?php

require 'Foo.php';

//Static functions can be called without having to initiaize the class. 
echo Foo::hello("Hey World!");
//same goes for variables
echo Foo::$bar;