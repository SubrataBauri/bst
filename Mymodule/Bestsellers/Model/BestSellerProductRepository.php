<?php
/**
 * @author Subrata Bauri
 * @copyright Copyright (c) 2018 Subrata Bauri
 * @package Mymodule_Bestsellers
 */
namespace Mymodule\Bestsellers\Model;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class BestSellerProductRepository implements \Mymodule\Bestsellers\Api\BestSellerProductRepositoryInterface
{
    /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface
     */
    private $extensionAttributesJoinProcessor;

    /**
     * @var \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * @var \Magento\Catalog\Api\Data\ProductSearchResultsInterfaceFactory
     */
    private $searchResultsFactory;

    /**
     * @var \Magento\Sales\Model\ResourceModel\Report\Bestsellers\CollectionFactory
     */
    private $bestSellersCollectionFactory;

    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory,
        \Magento\Sales\Model\ResourceModel\Report\Bestsellers\CollectionFactory $bestSellersCollectionFactory,
        \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor,
        \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor,
        \Magento\Catalog\Api\Data\ProductSearchResultsInterfaceFactory $searchResultsFactory
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
        $this->collectionProcessor = $collectionProcessor;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->bestSellersCollectionFactory = $bestSellersCollectionFactory;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getList($fromDate, $toDate, \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $productIds = [];
        $pageSize = ($searchCriteria->getPageSize() === null) ? $searchCriteria->getPageSize(): $this->defaultPageSize;
        
        $bestSellersCollection = $this->bestSellersCollectionFactory->create();
        $bestSellersCollection->setModel(\Magento\Catalog\Model\Product::class);
        $bestSellersCollection->setPeriod('year')->setDateRange($fromDate, $toDate);
        $bestSellersCollection->setPageSize($pageSize)->setCurPage(1);
        $bestSellersCollection->load();
        
        $productIds = $bestSellersCollection->getColumnValues('product_id');

        $collection = $this->collectionFactory->create();
        $this->extensionAttributesJoinProcessor->process($collection);
        $collection->addAttributeToSelect('*');
        $collection->addIdFilter($productIds);
        $collection->joinAttribute('status', 'catalog_product/status', 'entity_id', null, 'inner');
        $collection->joinAttribute('visibility', 'catalog_product/visibility', 'entity_id', null, 'inner');
        
        $this->collectionProcessor->process($searchCriteria,$collection);
        $collection->load();
        
        $searchResult = $this->searchResultsFactory->create();
        $searchResult->setSearchCriteria($searchCriteria);
        $searchResult->setItems($collection->getItems());
        $searchResult->setTotalCount($collection->getSize());       
        return $searchResult;
    }
}
