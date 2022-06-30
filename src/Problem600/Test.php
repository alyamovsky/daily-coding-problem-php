<?php

declare(strict_types=1);

namespace App\Problem600;

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function testCalculateLineLength(): void
    {
        self::assertSame(2.0, Solution::calculateLineLength(new Coordinates(1, 1), new Coordinates(1, 3)));
        self::assertSame(2.0, Solution::calculateLineLength(new Coordinates(2, 2), new Coordinates(2, 4)));
        self::assertSame(2.0, Solution::calculateLineLength(new Coordinates(2, 2), new Coordinates(2, 4)));
        self::assertSame(3.0, Solution::calculateLineLength(new Coordinates(-1, 1), new Coordinates(2, 1)));
    }

    public function testFindShortestLine(): void
    {
        self::assertSame([[-1, -1], [1, 1]], Solution::findShortestLine([[-1, -1], [3, 4], [6, 1], [1, 1], [-1, -6], [-4, -3]]));
    }
}
