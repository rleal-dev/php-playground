<?php

require_once '../../vendor/autoload.php';

use Rleal\Playground\Fluent\DB;

$query = DB::table('users')
    ->select('name', 'email')
    ->where('email', '=', 'user@email.com')
    ->orderBy('name')
    ->get();

dd($query);
