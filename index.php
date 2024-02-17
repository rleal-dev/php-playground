<?php

require_once 'vendor/autoload.php';

use Rleal\Playground\User;

header('Content-Type: application/json; charset=utf-8');

// Object to Array/Json/XML
$user = (new User)
    ->setName('User Name')
    ->setEmail('user@email.com')
    ->toJson();

dd($user);
