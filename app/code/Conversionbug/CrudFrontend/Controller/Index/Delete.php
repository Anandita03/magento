<?php
namespace Conversionbug\CrudFrontend\Controller\Index;
use Magento\Framework\Controller\ResultFactory;
use Conversionbug\CrudFrontend\Model\SampleFactory;

class Delete extends \Magento\Framework\App\Action\Action {
    
    
    protected $_postFactory;
   
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Conversionbug\CrudFrontend\Model\SampleFactory $postFactory
    ) {
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function execute() 
    {
        $id = $this->getRequest()->getParam('id');
        try {
            $model = $this->_postFactory->create();
            $model->load($id);
            $model->delete();
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
    }

}
