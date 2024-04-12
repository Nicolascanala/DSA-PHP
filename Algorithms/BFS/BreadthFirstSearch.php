<?php

function bfs($adjNodes, $start, $target)
{
    $visited = [];
    $queue = [$start];

    while (!empty($queue)) {
        $v = array_shift($queue);
        $visited[$v] = 1;

        foreach ($adjNodes[$v] as $n) {
            if (!array_key_exists($n, $visited)) {
                array_push($queue, $n);
            }
        }
    }

    return array_key_exists($target, $visited);
}