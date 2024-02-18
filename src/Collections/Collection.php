<?php

namespace Rleal\Playground\Collections;

use Iterator;

class Collection implements Iterator
{
    public function __construct(
        public array $items = [],
        private ?int $index = 0,
    ) {
    }

    public function current(): mixed
    {
        return $this->items[$this->index];
    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): mixed
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->key()]);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }

    public function hasKey(mixed $key): bool
    {
        return isset($this->items[$key]);
    }

    public function exists()
    {
        return $this->count() > 0;
    }

    public function isEmpty()
    {
        return $this->count() === 0;
    }

    public function count()
    {
        return count($this->items);
    }

    public function reverse(): self
    {
        $this->items = array_reverse($this->items);
        $this->rewind();

        return $this;
    }

    public function filter(callable $callable): self
    {
        $this->items = array_filter($this->items, $callable);

        return $this;
    }

    public function map(callable $callable): self
    {
        $this->items = array_map($callable, $this->items);

        return $this;
    }

    public function get()
    {
        return $this->items;
    }
}
