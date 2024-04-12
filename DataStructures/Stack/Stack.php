<?php

class Stack
{
    private array $stack = [];

    public function __construct(array $stack = [])
    {
        $this->stack = $stack;
    }

    public function push($data): void
    {
        array_push($this->stack, $data);
    }

    public function pop()
    {
        return array_pop($this->stack);
    }

    public function peek()
    {
        return $this->stack[count($this->stack) - 1];
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function print(): void
    {
        echo implode(', ', $this->stack);
    }

    public function length(): int
    {
        return count($this->stack);
    }

    public function clear(): void
    {
        $this->stack = [];
    }

    public function reverse(): void
    {
        $this->stack = array_reverse($this->stack);
    }
}