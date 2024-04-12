<?php

require "BinarySearch.php";

/**
 * ----------------------
 * Binary Search usage.
 * --------------------
 */
$list = [1, 2, 3, 4, 5, 6, 7, 8];
$result = binarySearch($list, 3);
dd($result);