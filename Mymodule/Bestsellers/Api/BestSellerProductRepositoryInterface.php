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
     * Get bestselling products - filtered
     * 
     * @param string $fromDate
     * @param string $toDate
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Catalog\Api\Data\ProductSearchResultsInterface
     */
    public function getList($fromDate, $toDate,\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Get All products list
     * 
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Catalog\Api\Data\ProductSearchResultsInterface
     */
    public function getAllList();
}
