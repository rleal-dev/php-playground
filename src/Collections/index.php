<?php

require_once '../../vendor/autoload.php';

use Rleal\Playground\Collections\Collection;

$array = [1, 2, 3, 4, 5];

$collection = new Collection($array);
$collection = collect($array);

foreach ($collection as $item) {
    dd($item);
}

dd(
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
