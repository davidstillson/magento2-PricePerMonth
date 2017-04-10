<?php

namespace MKEPUG\PricePerMonth\Api;

interface MonthlyCalculatorInterface
{
    /**
     * @param $price
     * @param $terms
     * @return float
     */
    public function getMonthlyRate($price, $terms);
}