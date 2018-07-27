<?php

namespace Conversionbug\CrudFrontend\Controller\Index;

class Logic extends \Magento\Framework\App\Action\Action{

    protected $_pageFactory;

	protected $_postFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Conversionbug\CrudFrontend\Model\SampleFactory $postFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		return parent::__construct($context);
    }
    
    public function execute(){
        $post = $this->_postFactory->create();
         //Load the item with ID is 1
         $item = $post->load(1);
         var_dump($item->getData());

    }
}
