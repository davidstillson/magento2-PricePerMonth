<?php

namespace MKEPUG\PricePerMonth\Block\Product\View;

use Magento\Catalog\Block\Product\AbstractProduct;
use Magento\Catalog\Block\Product\Context;
use MKEPUG\PricePerMonth\Api\MonthlyCalculatorInterface;

class PricePerMonth extends AbstractProduct
{

    protected $_monthlyCalculator;
    /**
     * PricePerMonth constructor.
     * @param Context $context
     * @param MonthlyCalculatorInterface $monthlyCalculator
     * @param array $data
     */
    public function __construct(Context $context,
                                MonthlyCalculatorInterface $monthlyCalculator,
                                array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_monthlyCalculator = $monthlyCalculator;
    }

    /**
     * @return float
     */
    public function getMonthlyPrice()
    {
        $product = $this->getProduct();

        $price = $product->getPrice();

        $monthly_price = $this->_monthlyCalculator->getMonthlyRate($price, 24);

        return $monthly_price;
    }


}