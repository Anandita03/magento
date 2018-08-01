<?php

namespace Conversionbug\FAQ\Controller\Index;

class Faq extends \Magento\Framework\App\Action\Action{

    protected $_pageFactory;

	protected $_postFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
    }
    
    public function execute(){
        $page = $this->_pageFactory->create();
        return $page;
    }
}

