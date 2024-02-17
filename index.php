<?php

require_once 'vendor/autoload.php';

use Rleal\Playground\User;

// Object to Array / Json
$user = (new User)
    ->setName('User Name')
    ->setEmail('user@email.com');

dd($user->toArray());
dd($user->toJson());
