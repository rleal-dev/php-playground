<?php

namespace Rleal\Playground;

use ReflectionClass;

class FirstCommand
{
    public string $signature = 'First Command';

    public function handle(): bool
    {
        return true;
    }
}

class SecondCommand
{
    public string $signature = 'Second Command';

    public function handle(): bool
    {
        return true;
    }
}

class ThirdCommand
{
    public string $signature = 'Third Command';

    public function handle(): bool
    {
        return true;
    }
}

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
