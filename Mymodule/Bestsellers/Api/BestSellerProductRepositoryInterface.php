<?php
/**
 * @author Subrata Bauri
 * @copyright Copyright (c) 2018 Subrata Bauri
 * @package Mymodule_Bestsellers
 */
namespace Mymodule\Bestsellers\Api;
/**
 * @api
 */
interface BestSellerProductRepositoryInterface
{
    /**
     * Get product list
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Catalog\Api\Data\ProductSearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
