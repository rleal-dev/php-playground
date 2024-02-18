<?php

namespace Rleal\Playground\Commands;

class FirstCommand
{
    public string $signature = 'First Command';

    public function handle(): bool
    {
        return true;
    }
}
