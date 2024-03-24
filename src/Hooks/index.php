<?php

require_once '../../vendor/autoload.php';

use function Rleal\Playground\Hooks\useAuth;

[$login, $logout] = useAuth();

echo $login();
echo $logout();