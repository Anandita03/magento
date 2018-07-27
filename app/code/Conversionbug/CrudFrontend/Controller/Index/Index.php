<?php

namespace Conversionbug\CrudFrontend\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action{

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
        $page = $this->_pageFactory->create();
        return $page;
    }
}

