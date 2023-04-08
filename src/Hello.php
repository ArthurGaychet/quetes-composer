<?php

namespace App;

class Hello 
{
    private string $hello = "Hello World !";

    public function talk(){
        return $this->hello;
    }
}