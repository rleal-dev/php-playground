<?php

require_once '../../vendor/autoload.php';

use Rleal\Playground\Magic\{Invoke, MyClass};

// Construct / Destruct
$obj = new MyClass();

// Call / CallStatic
$obj->myMethod('Call test');
MyClass::myMethod('CallStatic test');

// toString
echo $obj;

// DegugInfo
var_dump($obj);

// Invoke
$invoke = new Invoke();
dd($invoke());
