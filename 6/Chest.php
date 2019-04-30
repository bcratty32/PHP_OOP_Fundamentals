<?php

class Chest {
    protected $lock;
    protected $isClosed;

    //Type hinting was added aka Lock
    public function __construct(Lock $lock)
    {
        $this->lock = $lock;
    }

    //By doing $lock = true, we are making the parameter optional. 
    public function close($lock = true){
        if($lock === true){
            $this->lock->lock();
        }
        echo "Closen";
    }

    public function open(){
        if($this->lock->isLocked()){
            $this->lock->unlock();
        }

        $this->isClosed = false;

        echo "Open";
    }
}