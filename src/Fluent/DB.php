<?php

namespace Rleal\Playground\Fluent;

class DB
{
    public function __construct(
        private string $table = '',
        private ?array $columns = [],
        private ?array $conditions = [],
        private ?string $order = null,
    ) {
    }

    public static function table(string $table): self
    {
        return new static($table);
    }

    public function select(mixed $columns): self
    {
        $this->columns = is_array($columns) ? $columns : func_get_args();

        return $this;
    }

    public function where(string $column, string $operator, string $value): self
    {
        $this->conditions[] = [$column, $operator, $value];

        return $this;
    }

    public function orderBy(string $column, string $order = 'ASC'): self
    {
        $this->order = $column . ' ' . $order;

        return $this;
    }

    public function get()
    {
        $query = 'SELECT ' . implode(', ', $this->columns) . ' FROM ' . $this->table;

        if (count($this->conditions)) {
            $query .= ' WHERE ';
            foreach ($this->conditions as $condition) {
                $query .= $condition[0] . ' ' . $condition[1] . ' ' . $condition[2] . ' AND ';
            }

            $query = rtrim($query, ' AND ');
        }

        if ($this->order) {
            $query .= ' ORDER BY ' . $this->order;
        }

        return $query;
    }
}
