<?php

class TreeNode
{
    public $data;
    public $parent;
    public $children;

    public function __construct($data)
    {
        $this->data = $data;
        $this->parent = null;
        $this->children = [];
    }

    public function addChild(TreeNode $child)
    {
        $child->parent = $this;
        $this->children[] = $child;
    }

    public function getLevel()
    {
        $level = 0;
        $p = $this->parent;
        while ($p) {
            $level++;
            $p = $p->parent;
        }
        return $level;
    }

    public function printTree()
    {
        $spaces = str_repeat("&nbsp;", $this->getLevel() * 3);
        $prefix = $this->parent ? $spaces . "|--" : "";
        echo $prefix . $this->data . "<br>";
        if (!empty($this->children)) {
            foreach ($this->children as $child) {
                $child->printTree();
            }
        }
    }
}

function buildTree()
{
    $root = new TreeNode("Electronics");

    $laptop = new TreeNode("Laptops");
    $laptop->addChild(new TreeNode("Mac"));
    $laptop->addChild(new TreeNode("Lenovo"));
    $laptop->addChild(new TreeNode("Thinkpad"));

    $phone = new TreeNode("Phones");
    $phone->addChild(new TreeNode("Iphone"));
    $phone->addChild(new TreeNode("Samsung"));
    $phone->addChild(new TreeNode("Pixel"));

    $root->addChild($laptop);
    $root->addChild($phone);

    return $root;
}