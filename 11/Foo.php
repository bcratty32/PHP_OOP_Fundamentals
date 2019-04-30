<?php 

class Foo {

    public function bar(){
        echo "foobar<br>";

        //This will allow us to do method chaining 
        return $this;
    }
    public function baz(){
        echo "foobaz";
    }

}