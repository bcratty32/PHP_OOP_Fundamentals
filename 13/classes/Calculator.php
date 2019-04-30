<?php

class Calculator{
    protected $result;

    protected $operation;

    //Since we want to pass in a object we need to type hint this. 
    //Since we have different types that we are going to bind to then we are going to create an interface to handle this
    //This is an example of dependency injection.
    public function setOperation(OperationInterface $operation){
        $this->operation = $operation;

        //The following line will tell us what operation just got passed in
        //var_dump($operation);
    }

    //We dont need to pass in params for the 2 numbers that we are calculateing.
    //WE can just use func_get_arg
    public function calculate(){

        //to see these in action look at the following below.
        //print_r(func_get_args());

        //You can always add in more conditional checking to thsi for example if you have something else in the args
        foreach(func_get_args() as $num){
            //We know all operations have the same method 'run' so thats why we can simple do $this->operatoin to get the object, then call the run method.
            $this->result = $this->operation->run($num, $this->result);
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}