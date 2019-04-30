<?php

//This 'implements' is how we create new interfaces.
class Collection implements Countable, JsonSerializable {
    protected $items = [];
    
    public function add($val){
        $this->items[] = $val;
    }

    public function set($key, $val){
        $this->items[$key] = $val;
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
}