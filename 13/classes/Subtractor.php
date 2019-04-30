<?php

class Subtractor implements OperationInterface{
    public function run($num, $val){
        return $val - $num;
    }
}