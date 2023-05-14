<?php

class ClassLoader
{
    protected $dirs;

    public function registerDir(string $dir)
    {
        $this->dirs[] = $dir;
    }

    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }

    public function loadClass($class_name)
    {
        foreach ($this->dirs as $dir)
        {
            $filePath = $dir . '/' . $class_name . '.php';

            if (is_readable($filePath))
            {
                require $filePath;
                return;
            }
        }
    }
}

$classLoader = new ClassLoader();
$classLoader->registerDir(__DIR__ . '/classes');
$classLoader->register();

$sampleA = new SampleA();
$sampleB = new SampleA();