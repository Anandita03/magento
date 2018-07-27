<?php
namespace Conversionbug\CrudFrontend\Controller\Index;
use Magento\Framework\Controller\ResultFactory;
use Conversionbug\CrudFrontend\Model\SampleFactory;

class UpdatePost extends \Magento\Framework\App\Action\Action {
    
    
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
        //echo $id;exit;
        //$post = $this->_postFactory->create();
        //Load the item with ID is 1
        // var_dump($item->getData());
        try {
            $post = (array) $this->getRequest()->getPost();
            $name    = $post['name'];
            $age     = $post['age'];


            $model = $this->_postFactory->create();
            $model = $model->load($id);

            $model->setName($name)
                ->setAge($age)
                ->save();

        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
    }

}

