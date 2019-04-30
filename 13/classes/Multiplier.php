<?php

class Multiplier implements OperationInterface{
    public function run($num, $val){
        return $num * $val;
    }
}