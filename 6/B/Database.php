<?php

class Database {

    protected static $instance;

    public static function getInstance() {
        if(!static::$instance){
            static::$instance = new self;
            //All this means is a new database, its dynamic
        }

        return static::$instance;
    }

    public function query($sql){
        //This is what he typed out but was told to ignore it because we dont have a database hooked up
        //Plus this was ust supposed to b a real life example
        //$this->pdo->prepare($sql)->$execute();
        echo $sql, "<br>";
        //On a real site, that echo you see would actually be the query that is being executed behind the scenes.
    }
}