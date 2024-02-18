<?php

require_once '../../vendor/autoload.php';

use Rleal\Playground\Collections\Collection;
use Rleal\Playground\Data\UserModel;

$array = [1, 2, 3, 4, 5];

$collection = new Collection($array);
$collection = collect($array);

foreach ($collection as $item) {
    dump($item);
}

dump(
    $collection->hasKey(1),
    $collection->exists(),
    $collection->isEmpty(),
    $collection->count(),
    $collection->reverse()->get(),
    $collection->map(fn ($item) => $item * 2)->get(),
    $collection->filter(fn ($item) => $item > 2)->get(),
    $collection
        ->map(fn ($item) => $item * 2)
        ->filter(fn ($item) => $item > 5)
        ->get(),
);

$users = collect([
    new UserModel('User Teste', 'user@mail.com'),
    new UserModel('User Teste 02', 'user2@email.com'),
]);

foreach ($users as $user) {
    dump($user->name, $user->email, $user->stacks);
}
