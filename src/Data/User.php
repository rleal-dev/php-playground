<?php

declare(strict_types=1);

namespace Rleal\Playground\Data;

use JsonSerializable;

class User implements JsonSerializable
{
    private string $name;

    private string $email;

    private array $stacks;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function getStacks(): array
    {
        return $this->stacks;
    }

    public function setStacks(array $stacks)
    {
        $this->stacks = $stacks;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }

    public function toJson(): string
    {
        return json_encode($this);
    }

    public function toXML(): string
    {
        return array_to_xml($this->toArray());
    }
}
