<?php

declare(strict_types=1);

namespace App\Problem2;

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function testCheckTwoArrayElementsSumForeach(): void
    {
        self::assertTrue(Solution::checkTwoArrayElementsSumForeach([10, 15, 3, 7], 17));
        self::assertTrue(Solution::checkTwoArrayElementsSumForeach([10, 15, 3, 7], 10));
        self::assertFalse(Solution::checkTwoArrayElementsSumForeach([10, 15, 3, 7], 11));
        self::assertFalse(Solution::checkTwoArrayElementsSumForeach([10, 15, 3, 7], 2));
    }

    public function testCheckTwoArrayElementsSumSet(): void
    {
        self::assertTrue(Solution::checkTwoArrayElementsSumSet([10, 15, 3, 7], 17));
        self::assertTrue(Solution::checkTwoArrayElementsSumSet([10, 15, 3, 7], 10));
        self::assertFalse(Solution::checkTwoArrayElementsSumSet([10, 15, 3, 7], 11));
        self::assertFalse(Solution::checkTwoArrayElementsSumSet([10, 15, 3, 7], 2));
    }
}