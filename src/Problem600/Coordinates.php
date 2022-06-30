<?php

declare(strict_types=1);

namespace App\Problem600;

final class Coordinates
{
    private int $x;

    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function isEqual(Coordinates $coordinates): bool
    {
        return $this->x === $coordinates->getX() && $this->y === $coordinates->getY();
    }

    public function toArray(): array
    {
        return [
            $this->x,
            $this->y,
        ];
    }
}