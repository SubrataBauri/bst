<?php
/**
 * @author Subrata Bauri
 * @copyright Copyright (c) 2018 Subrata Bauri
 * @package Mymodule_Bestsellers
 */

namespace Mymodule\Bestsellers\Plugin\Catalog\Model\ResourceModel\Product;

class CollectionPlugin
{
    const SORT_ORDER_VIRTUAL_COLUMN_NAME = 'discount_price';

    public function aroundAddAttributeToSort(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $subject,
        \Closure $proceed,
        $attribute,
        $dir =  \Magento\Catalog\Model\ResourceModel\Product\Collection::SORT_ORDER_ASC
    ){
        if($attribute == self::SORT_ORDER_VIRTUAL_COLUMN_NAME)
        {

            $subject->getSelect()->order("{$attribute} {$dir}");
            return $subject;
        }
        return $proceed($attribute, $dir = self::SORT_ORDER_ASC);
    }
}
