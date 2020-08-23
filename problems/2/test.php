<?php

declare(strict_types=1);

require_once __DIR__ . '/solution.php';

@ini_set('zend.assertions',  '1');
ini_set('assert.active', '1');

assert(true === checkTwoArrayElementsSumForeach([10, 15, 3, 7], 17));
assert(true === checkTwoArrayElementsSumForeach([10, 15, 3, 7], 10));
assert(false === checkTwoArrayElementsSumForeach([10, 15, 3, 7], 11));
assert(false === checkTwoArrayElementsSumForeach([10, 15, 3, 7], 2));

assert(true === checkTwoArrayElementsSumSet([10, 15, 3, 7], 17));
assert(true === checkTwoArrayElementsSumSet([10, 15, 3, 7], 10));
assert(false === checkTwoArrayElementsSumSet([10, 15, 3, 7], 11));
assert(false === checkTwoArrayElementsSumSet([10, 15, 3, 7], 2));

echo 'All tests passed!';