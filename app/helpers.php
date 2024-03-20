<?php

if (!function_exists('isAssociative')) {
    function isAssociative(array $arr)
    {
        if ($arr === []) {
            return true;
        }
        return array_keys($arr) !== range(0, count($arr) - 1);
    }
}
