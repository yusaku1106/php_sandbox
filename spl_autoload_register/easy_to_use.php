<?php

spl_autoload_register(function ($class_name) {
    echo 'find a class named ' . $class_name . PHP_EOL;
    include __DIR__ . '/classes/' . $class_name . '.php';
});

$sampleA = new SampleA();
$sampleB = new SampleB();