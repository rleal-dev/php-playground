<?php

namespace Rleal\Playground\Events;

class Listener
{
    public function handle(): void
    {
        dump('Event Listener....');
    }
}
