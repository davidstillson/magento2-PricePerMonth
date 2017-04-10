<?php
/**
 * MonthlyCalculator
 *
 * @copyright Copyright © 2017 DS Media. All rights reserved.
 * @author    davidstillson@gmail.com
 */

namespace MKEPUG\PricePerMonth\Services;

use MKEPUG\PricePerMonth\Api\MonthlyCalculatorInterface;

class MonthlyCalculator implements MonthlyCalculatorInterface
{
    /**
     * @param $price
     * @param $terms
     * @return float|int
     */
    public function getMonthlyRate($price, $terms)
    {
        $apy = (float) 1.18;

        $total_cost = $price * $apy;

        $monthly_rate = round($total_cost / $terms, 2);

        return $monthly_rate;
    }
}