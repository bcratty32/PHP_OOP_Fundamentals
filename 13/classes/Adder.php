<?php

class Adder implements OperationInterface{
    public function run($num, $val){
        return $num + $val;
    }
}