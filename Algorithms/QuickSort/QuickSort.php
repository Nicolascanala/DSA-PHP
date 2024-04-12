<?php

function quickSort($list)
{
    if (empty($list)) {
        return [];
    }

    $lessThan = [];
    $greaterThan = [];
    if (sizeof($list) < 2) {
        return $list;
    }

    $key = key($list);
    $shift = array_shift($list);

    foreach ($list as $value) {
        $value <= $shift ? $lessThan[] = $value : $greaterThan[] = $value;
    }

    return array_merge(quickSort($lessThan), [$key => $shift], quickSort($greaterThan));
}