<?php 

class Rectangle extends Shape{
//Triangle's own function;
    public function Area(){
        return ($this->width * $this->height);
    }
}
