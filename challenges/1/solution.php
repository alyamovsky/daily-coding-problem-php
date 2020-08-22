<?php

declare(strict_types=1);

class Coordinates
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


function calculateLineLength(Coordinates $firstCoordinates, Coordinates $secondCoordinates): float
{
    $a = $firstCoordinates->getX() > $secondCoordinates->getX()
        ? $firstCoordinates->getX() - $secondCoordinates->getX()
        : $secondCoordinates->getX() - $firstCoordinates->getX();

    $b = $firstCoordinates->getY() > $secondCoordinates->getY()
        ? $firstCoordinates->getY() - $secondCoordinates->getY()
        : $secondCoordinates->getY() - $firstCoordinates->getY();

    return sqrt($a ** 2) + sqrt($b ** 2);
}

function findShortestLine(array $input): array
{
    $coordinatesArray = [];
    foreach ($input as $item) {
        $coordinatesArray[] = new Coordinates($item[0], $item[1]);
    }

    $shortestLineLength = calculateLineLength($coordinatesArray[0], $coordinatesArray[1]);
    $shortestCoordinatesPair = [$coordinatesArray[0]->toArray(), $coordinatesArray[1]->toArray()];
    foreach ($coordinatesArray as $firstCoordinates) {
        foreach ($coordinatesArray as $secondCoordinates) {
            if ($firstCoordinates->isEqual($secondCoordinates)) {
                continue;
            }

            if (($shortestLineCandidate = calculateLineLength($firstCoordinates, $secondCoordinates)) < $shortestLineLength) {
                $shortestLineLength = $shortestLineCandidate;
                $shortestCoordinatesPair = [$firstCoordinates->toArray(), $secondCoordinates->toArray()];
            }
        }
    }

    return $shortestCoordinatesPair;
}