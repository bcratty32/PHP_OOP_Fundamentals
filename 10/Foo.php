<?php 

class Foo {

    public static $bar = "foobar";
    public static function hello($bar = "Hello World!"){
        return $bar;
    }

    
    // This will error out. This is because we arent creating an instance.
    // public $bar = "foobar";
    // public static function hello(){
    //     return $this->bar;
    // }
}