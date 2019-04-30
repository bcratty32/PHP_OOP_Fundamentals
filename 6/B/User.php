<?php

class User {
    //Not needed with the getInstance thing
    protected $db;

    public function __construct(Database $db){
        $this->db = $db;
    }


     //Now with the getInstancemfuncition in Database.php we can do this:
    public function create(array $data){
        //use the below when we arent using the type coupling
        $this->db->query('INSERT INTO `users`...blah blah blah');


         //Now with the getInstancemfuncition in Database.php we can do this:
        //  $db = Database::getInstance();
        //  $db->query('INSERT INTO `users`...blah blah blah');
    }
}