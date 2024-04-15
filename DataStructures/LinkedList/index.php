<?php

require "LinkedList.php";

/**
 * ----------------------------------------------
 * Singly Linked List Initialization and usage.
 * --------------------------------------------
 * 
 * @method prepend
 * @method append
 * @method insertAtIndex
 * @method delete
 */
$linked_list = new LinkedList();
$linked_list->append(1);
$linked_list->append(2);
$linked_list->append(3);
$linked_list->append(4);
$linked_list->prepend(0);
$linked_list->prepend(10);
$linked_list->prepend(20);
// $linked_list->delete(20);
// $linked_list->delete(4);
// $linked_list->delete(2);
$linked_list->insertAtIndex(80, 4);
$linked_list->insertAtIndex(90, 4);

echo "<pre>";
print_r($linked_list);
echo "</pre>";

