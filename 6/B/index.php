<?php

require 'Database.php';
require 'User.php';

$user = new User(new Database);

$user->create(['username' => "Terry"]);

//Example 2: This is with the getInstance. The demo told me to remove all the dependency injection stuff.

// $user = new User();