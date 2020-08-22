<?php

declare(strict_types=1);

require_once __DIR__ . '/solution.php';

@ini_set('zend.assertions',  '-1');
ini_set('assert.active', '1');

assert(2.0 === calculateLineLength(new Coordinates(1, 1), new Coordinates(1, 3)));
assert(2.0 === calculateLineLength(new Coordinates(2, 2), new Coordinates(2, 4)));
assert(2.0 === calculateLineLength(new Coordinates(2, 2), new Coordinates(2, 4)));
assert(3.0 === calculateLineLength(new Coordinates(-1, 1), new Coordinates(2, 1)));

assert([[-1, -1], [1, 1]] === findShortestLine([[-1, -1], [3, 4], [6, 1], [1, 1], [-1, -6], [-4, -3]]));

echo 'All tests passed!';