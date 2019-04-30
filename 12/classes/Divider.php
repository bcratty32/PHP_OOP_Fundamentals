<?php

class Divider implements OperationInterface{
    public function run($num, $val){
        return $val / $num;
    }
}