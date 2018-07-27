<?php

namespace Conversionbug\CrudFrontend\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Save extends \Magento\Framework\App\Action\Action
{
    

	protected $_postFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Conversionbug\CrudFrontend\Model\SampleFactory $postFactory
		)
	{
		$this->_postFactory = $postFactory;
		return parent::__construct($context);
    }
    
    public function execute()
    {
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();
         //echo 'Y';exit;
        if (!empty($post)) {
            // Retrieve your form data
            $name    = $post['name'];
            $age       = $post['age'];
            //insert operation
            $post = $this->_postFactory->create();
            $post->setName($name)
                ->setAge($age)
                ->save();

            // Redirect to your form page (or anywhere you want...)
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl($this->_redirect->getRefererUrl());
            return $resultRedirect;
        }
    }
}