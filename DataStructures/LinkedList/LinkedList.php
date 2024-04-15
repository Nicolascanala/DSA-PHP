<?php

class SingleNode
{
    public int $data;
    public ?SingleNode $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function prepend($data)
    {
        $newNode = new SingleNode($data);

        if ($this->head === null) {
            $this->head = $newNode;
            return;
        }

        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function append($data)
    {
        $newNode = new SingleNode($data);

        if ($this->head === null) {
            $this->head = $newNode;
            return;
        }

        $current = $this->head;
        while ($current->next !== null) {
            $current = $current->next;
        }

        $current->next = $newNode;
    }

    public function insertAtIndex($data, $index)
    {
        $newNode = new SingleNode($data);

        if ($this->head === null) {
            if ($index > 0) {
                return false;
            } else {
                $this->head = $newNode;
            }
        }

        if ($index === 0) {
            $newNode->next = $this->head;
            $this->head = $newNode;
            return true;
        }

        $current = $this->head;
        $previous = null;
        $i = 0;

        while ($i < $index) {
            $previous = $current;
            $current = $current->next;

            if ($current === null) {
                break;
            }

            $i++;
        }

        $newNode->next = $current;
        $previous->next = $newNode;

        return true;
    }

    public function delete($data)
    {
        if ($this->head === null) {
            return false;
        }

        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return true;
        }

        $current = $this->head;
        while ($current->next !== null) {
            if ($current->next->data === $data) {
                $current->next = $current->next->next;
                return true;
            }

            $current = $current->next;
        }

        return false;
    }
}
