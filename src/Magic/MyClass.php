<?php

namespace Rleal\Playground\Magic;

class MyClass
{
    private string $property = 'MyClass';

    public function __construct()
    {
        echo 'Initializing ' . __CLASS__ . "\n";
    }

    public function __call($name, $arguments)
    {
        echo "Calling method {$name}: " . implode(', ', $arguments) . "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method {$name}: " . implode(', ', $arguments) . "\n";
    }

    public function __toString()
    {
        return $this->property;
    }

    public function __debugInfo()
    {
        return [
            'property' => 'teste',
        ];
    }

    public function __destruct()
    {
        echo 'Destroying ' . __CLASS__ . "\n";
    }
}
