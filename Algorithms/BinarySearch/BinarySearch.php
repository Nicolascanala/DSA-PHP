<?php

function binarySearch($list, $target)
{
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) {
        $mid = $low + $high >> 1;

        if ($list[$mid] == $target) {
            return $mid;
        } elseif ($list[$mid] > $target) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    return null;
}
