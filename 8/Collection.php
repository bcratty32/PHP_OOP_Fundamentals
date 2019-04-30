<?php

//This 'implements' is how we create new interfaces.
class Collection implements Countable, JsonSerializable {
    protected $items = [];

    //Magic Methods
    // __construct();
    // __set();
    // __get();
    // __call();
    // __toString();


    public function __set($key, $val){
        $this->set($key, $val);
    }

    public function __get($val){
        return $this->get($val);
    }

    public function __call($func, $args){
        echo $func . 'has been called with arguments '. implode(' , ', $args);
    }

    public function __toString()
    {
        return $this->jsonSerialize();
    }
    public function add($val){
        $this->items[] = $val;
    }

    public function set($key, $val){
        $this->items[$key] = $val;
    }

    public function get($key){
        return array_key_exists($key, $this->items) ? $this->items[$key] : null;
    }

    public function toJson(){
        return json_encode($this->items);
    }
    public function jsonSerialize()
    {
        return json_encode($this->items);
    }
    //Error message will tell you to implement youre own count function
    public function count(){
        return count($this->items);
    }

    public function all() {
        return $this;
    }
}