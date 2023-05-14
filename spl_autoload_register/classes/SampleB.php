<?php

class SampleB
{
    public function __construct()
    {
        echo $this;   
    }

    public function __toString()
    {
        return 'Successfully instantiated SampleB class' . PHP_EOL;
    }
}