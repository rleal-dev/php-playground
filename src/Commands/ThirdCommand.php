<?php

namespace Rleal\Playground\Commands;

class ThirdCommand
{
    public string $signature = 'Third Command';

    public function handle(): bool
    {
        return true;
    }
}
