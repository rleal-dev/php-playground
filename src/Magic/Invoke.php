<?php

namespace Rleal\Playground\Magic;

class Invoke
{
    public function __invoke(): string
    {
        return 'PHP is awesome!';
    }
}
