<?php

class SampleA
{
    public function __construct()
    {
        echo $this;
    }

    public function __toString()
    {
        return 'Successfully instantiated SampleA class' . PHP_EOL;
    }
}