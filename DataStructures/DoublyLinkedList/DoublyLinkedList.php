<?php

class Node
{
    public int $data;
    public ?Node $prev;
    public ?Node $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->prev = null;
        $this->next = null;
    }
}

class DoublyLinkedList
{
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function prepend($data)
    {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            return;
        }

        $newNode->next = $this->head;
        $this->head->prev = $newNode;
        $this->head = $newNode;
    }

    public function append($data)
    {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            return;
        }

        $this->tail->next = $newNode;
        $newNode->prev = $this->tail;
        $this->tail = $newNode;
    }

    public function insertAfter($data, $target)
    {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            return;
        }

        if ($target === 0) {
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
            return;
        }

        $current = $this->head;
        for ($i = 0; $i < $target; $i++) {
            if ($current === null) {
                $this->tail->next = $newNode;
                $newNode->prev = $this->tail;
                $this->tail = $newNode;
                return;
            }
            $current = $current->next;
        }

        $newNode->next = $current;
        $newNode->prev = $current->prev;
        $current->prev->next = $newNode;
        $current->prev = $newNode;
    }
}