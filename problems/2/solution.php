<?php

declare(strict_types=1);

function checkTwoArrayElementsSumForeach(array $elements, int $reference): bool
{
    foreach ($elements as $firstElement) {
        foreach ($elements as $secondElement) {
            if ($reference === $firstElement + $secondElement) {
                return true;
            }
        }
    }

    return false;
}

function checkTwoArrayElementsSumSet(array $elements, int $reference): bool
{
    // 10, 15, 3, *7*
    $seen = [];

    // [10, 15, 3, 7], 17
    foreach ($elements as $element) {
        if (in_array(($reference - $element), $seen, true)) {
            return true;
        }

        $seen[] = $element;
    }

    return false;
}
