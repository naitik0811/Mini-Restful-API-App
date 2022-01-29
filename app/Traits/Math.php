<?php

/**
 * Laravel Trait
 * PHP version 8.1
 *
 * @category App\Traits
 * @package  App\Traitsp
 * @author   Naitik Patel<patelnaitik@live.in>
 */

namespace App\Traits;

/**
 * Trait Common
 *
 * @category App\Traits
 * @package  App\Traits
 * @author   Naitik Patel<patelnaitik@live.in>
 */

trait Math
{
    /**
     * Calculate simple rate of interest by tenure
     * @param int $amount
     * @param float $rateOfInterest
     * @param int $tenure
     * @return float
     */
    public function calculateInterestByTenure(int $amount, float $rateOfInterest, int $tenure): float
    {
        return (($amount * $rateOfInterest) / 100) / $tenure;
    }
}
