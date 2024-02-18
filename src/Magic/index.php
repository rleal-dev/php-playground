<?php

require_once '../../vendor/autoload.php';

use Rleal\Playground\Magic\{Invoke, MyClass, SetGet};

// Construct / Destruct
$obj = new MyClass();

// Call / CallStatic
$obj->myMethod('Call test');
MyClass::myMethod('CallStatic test');

// toString
echo $obj;

// DegugInfo
dump($obj);

// Set / Get
$obj2 = new SetGet();
$obj2->name = 'User Name';
dump($obj2->name);

// Invoke
$invoke = new Invoke();
dump($invoke());
