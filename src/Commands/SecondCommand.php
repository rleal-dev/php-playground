<?php

namespace Rleal\Playground\Commands;

class SecondCommand
{
    public string $signature = 'Second Command';

    public function handle(): bool
    {
        return true;
    }
}
