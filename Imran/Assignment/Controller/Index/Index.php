<?php

namespace Imran\Assignment\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Imran\Assignment\Model\ResourceModel\Post\CollectionFactory;
use Imran\Assignment\Api\ViewRepositoryInterface;

class Index extends Action
{
    /**
     * @var JsonFactory
     */
    private JsonFactory $resultJsonFactory;

    /**
     * @var CollectionFactory $employeeFactory
     */
    public CollectionFactory $collectionFactory;

    /**
     * @var ViewRepositoryInterface
     */
    public ViewRepositoryInterface $viewRepository;

    /**
     * Constructor
     *
     * @param JsonFactory $resultJsonFactory
     * @param Context $context
     * @param CollectionFactory $collectionFactory
     * @param ViewRepositoryInterface $viewRepository
     */
    public function __construct(
        JsonFactory $resultJsonFactory,
        Context $context,
        CollectionFactory $collectionFactory,
        ViewRepositoryInterface $viewRepository
    ) {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
        $this->collectionFactory = $collectionFactory;
        $this->viewRepository = $viewRepository;
    }

    /**
     * Execute
     *
     * @return Json
     */
    public function execute(): Json
    {
        $resultJson = $this->resultJsonFactory->create();
//        $collection = $this->viewRepository->load(2, $field = null);
        $collection = $this->viewRepository->getDataById(1);
//        $collection = $this->viewRepository->getCollection();
        return $resultJson->setData($collection);
    }
}
