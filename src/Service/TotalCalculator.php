<?php

declare(strict_types=1);

namespace App\Service;

class TotalCalculator
{
    public function execute(array $values)
    {
        return array_sum($values);
    }

    private function isNegativeItem(int $item)
    {
        return $item < 0;
    }
}