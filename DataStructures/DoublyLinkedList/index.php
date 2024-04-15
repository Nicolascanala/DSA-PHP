<?php

require "DoublyLinkedList.php";

/**
 * ----------------------------------------------
 * Doubly Linked List Initialization and usage.
 * --------------------------------------------
 * 
 * @method prepend
 * @method append
 * @method insertAfter
 */
$l = new DoublyLinkedList();
$l->prepend(2);
$l->prepend(3);
$l->append(0);
$l->append(1);
$l->prepend(5);
$l->insertAfter(6, 2);

echo '<pre>';
print_r($l);
echo '</pre>';