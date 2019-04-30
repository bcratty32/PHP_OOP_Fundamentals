<?php

class Person {
    public $name;
    public $age;

    public function sentence(){
        echo 'Sentence Function:', $this->name, ' is ', $this->age, ' years old.<br>';
    }
}