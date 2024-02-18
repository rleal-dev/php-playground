<?php

namespace Rleal\Playground\Data;

class UserModel
{
    public function __construct(
        public string $name,
        public string $email,
        public ?array $stacks = [],
    ) {
    }
}
