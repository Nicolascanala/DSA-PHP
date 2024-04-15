<?php

require "BinarySearchTree.php";

/**
 * ---------------------
 * Binary Search Tree.
 * -------------------
 * 
 * @method insert
 * @method remove
 * @method search
 * @method display
 */
$tree = new BinarySearchTree();
$tree->insert(new BSTNode(5));
$tree->insert(new BSTNode(2));
$tree->insert(new BSTNode(1));
$tree->insert(new BSTNode(4));
$tree->insert(new BSTNode(3));

$tree->remove(2);

$tree->display();
var_dump($tree->search(6));