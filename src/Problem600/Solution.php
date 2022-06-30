<?php

declare(strict_types=1);

namespace App\Problem600;

final class Solution
{
    public static function calculateLineLength(Coordinates $firstCoordinates, Coordinates $secondCoordinates): float
    {
        $a = $firstCoordinates->getX() > $secondCoordinates->getX()
            ? $firstCoordinates->getX() - $secondCoordinates->getX()
            : $secondCoordinates->getX() - $firstCoordinates->getX();

        $b = $firstCoordinates->getY() > $secondCoordinates->getY()
            ? $firstCoordinates->getY() - $secondCoordinates->getY()
            : $secondCoordinates->getY() - $firstCoordinates->getY();

        return sqrt($a ** 2) + sqrt($b ** 2);
    }

    public static function findShortestLine(array $input): array
    {
        $coordinatesArray = [];
        foreach ($input as $item) {
            $coordinatesArray[] = new Coordinates($item[0], $item[1]);
        }

        $shortestLineLength = self::calculateLineLength($coordinatesArray[0], $coordinatesArray[1]);
        $shortestCoordinatesPair = [$coordinatesArray[0]->toArray(), $coordinatesArray[1]->toArray()];
        foreach ($coordinatesArray as $firstCoordinates) {
            foreach ($coordinatesArray as $secondCoordinates) {
                if ($firstCoordinates->isEqual($secondCoordinates)) {
                    continue;
                }

                if (($shortestLineCandidate = self::calculateLineLength($firstCoordinates, $secondCoordinates)) < $shortestLineLength) {
                    $shortestLineLength = $shortestLineCandidate;
                    $shortestCoordinatesPair = [$firstCoordinates->toArray(), $secondCoordinates->toArray()];
                }
            }
        }

        return $shortestCoordinatesPair;
    }
}