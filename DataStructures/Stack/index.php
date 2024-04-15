<?php

require "Stack.php";

/**
 * --------------
 * Stack usage.
 * ------------
 * 
 * @method push
 * @method pop
 * @method peek
 * @method isEmpty
 * @method print
 * @method length
 * @method reverse
 * @method clear
 */
$stack = new Stack([]);
var_dump($stack->isEmpty());
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->pop();
var_dump($stack->peek());
var_dump($stack->isEmpty());
var_dump($stack->length());
// $stack->reverse();
// $stack->clear();
$stack->print();