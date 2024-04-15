<?php

require "BreadthFirstSearch.php";

$graph = [
    'A' => ['B', 'C'],
    'B' => ['D', 'E', 'F'],
    'C' => ['G'],
    'D' => [],
    'E' => [],
    'F' => ['H'],
    'G' => ['I'],
    'H' => [],
    'I' => [],
];

var_dump(bfs($graph, 'A', 'H'));