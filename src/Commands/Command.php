<?php

namespace Rleal\Playground\Commands;

use ReflectionClass;

class Command
{
    public function register(): array
    {
        return [
            FirstCommand::class,
            SecondCommand::class,
            ThirdCommand::class,
        ];
    }

    public function run(): void
    {
        array_map([$this, 'call'], $this->register());
    }

    public function call(string $command): void
    {
        $reflect = new ReflectionClass($command);
        $signature = $reflect->getProperty('signature')->getDefaultValue();

        echo 'Run: ' . $signature . PHP_EOL;

        (new $command())->handle();
    }
}
