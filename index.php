<?php

require_once 'vendor/autoload.php';

use Rleal\Playground\{Command, User, UserDTO};

// Object to Array/Json/XML
$user = (new User())
    ->setName('User Name')
    ->setEmail('user@email.com')
    ->setStacks(['PHP', 'JavaScript', 'Python']);

// dd($user);

$userArray = $user->toArray();
$userJson = $user->toJson();
$userXML = $user->toXML();

// dd($userArray, $userJson, $userXML);

// Object DTO
$userDTO = new UserDTO(...$userArray);
// $userDTO = UserDTO::fromArray($userArray);
// $userDTO = UserDTO::fromJson($userJson);
// $userDTO = UserDTO::from($user);

// dd($userDTO->toArray());

$command = (new Command())->run();
