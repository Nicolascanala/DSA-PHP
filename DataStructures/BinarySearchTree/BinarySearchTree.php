<?php

class BSTNode
{
    public int $data;
    public ?BSTNode $left;
    public ?BSTNode $right;

    public function __construct(int $data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinarySearchTree
{
    public ?BSTNode $root = null;

    public function insert(?BSTNode $node): void
    {
        $this->root = $this->insertHelper($this->root, $node);
    }

    private function insertHelper(?BSTNode $root, BSTNode $node)
    {
        $data = $node->data;

        if ($root === null) {
            $root = $node;
            return $root;
        } else if ($data < $root->data) {
            $root->left = $this->insertHelper($root->left, $node);
        } else {
            $root->right = $this->insertHelper($root->right, $node);
        }

        return $root;
    }

    public function display()
    {
        $this->displayHelper($this->root);
    }

    private function displayHelper(?BSTNode $root)
    {
        if ($root !== null) {
            $this->displayHelper($root->left);
            echo "<pre>";
            print_r($root->data);
            echo "</pre>";
            $this->displayHelper($root->right);
        }
    }

    public function search(int $data)
    {
        return $this->searchHelper($this->root, $data);
    }

    private function searchHelper(?BSTNode $root, int $data)
    {
        if ($root === null) {
            return false;
        } else if ($root->data === $data) {
            return true;
        } else if ($root->data > $data) {
            return $this->searchHelper($root->left, $data);
        } else {
            return $this->searchHelper($root->right, $data);
        }
    }

    public function remove(int $data)
    {
        if ($this->search($data)) {
            $this->removeHelper($this->root, $data);
        } else {
            var_dump($data . " could not be found.");
        }
    }

    private function removeHelper(?BSTNode $root, int $data)
    {
        if ($root === null) {
            return $root;
        } else if ($data < $root->data) {
            $root->left = $this->removeHelper($root->left, $data);
        } else if ($data > $root->data) {
            $root->right = $this->removeHelper($root->right, $data);
        } else {
            if ($root->left === null && $root->right === null) {
                $root = null;
            } else if ($root->right !== null) {
                $root->data = $this->successor($root);
                $root->right = $this->removeHelper($root->right, $root->data);
            } else {
                $root->data = $this->predecessor($root);
                $root->left = $this->removeHelper($root->left, $root->data);
            }
        }

        return $root;
    }

    private function successor(?BSTNode $root)
    {
        $root = $root->right;

        while ($root->left !== null) {
            $root = $root->left;
        }

        return $root->data;
    }

    private function predecessor(?BSTNode $root)
    {
        $root = $root->left;

        while ($root->right !== null) {
            $root = $root->right;
        }

        return $root->data;
    }
}