<?php

namespace Rleal\Playground\Data;

use Exception;

readonly class UserDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public array $stacks,
    ) {
    }

    public static function fromArray(array $array): self
    {
        return new self(...$array);
    }

    public static function fromJson(string $json): self
    {
        return new self(...json_decode($json, true));
    }

    public static function from(mixed $resource): self
    {
        return match (gettype($resource)) {
            'array' => self::fromArray($resource),
            'string' => self::fromJson($resource),
            'object' => self::fromArray($resource->toArray()),
            default => throw new Exception('Invalid resource type'),
        };
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
