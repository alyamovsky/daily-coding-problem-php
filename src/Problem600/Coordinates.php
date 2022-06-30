<?php

declare(strict_types=1);

namespace App\Problem600;

final class Coordinates
{
    public function __construct(
        public readonly int $x,
        public readonly int $y,
    ) {
    }

    public function isEqual(Coordinates $coordinates): bool
    {
        return $this->x === $coordinates->x && $this->y === $coordinates->y;
    }

    public function toArray(): array
    {
        return [
            $this->x,
            $this->y,
        ];
    }
}