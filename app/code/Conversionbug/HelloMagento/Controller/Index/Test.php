<?php

namespace Conversionbug\HelloMagento\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
    
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \Magento\Framework\App\Request\Http $request
    ) {
        parent::__construct($context);
        $this->request = $request;
    }
	public function execute()
	{ 
        echo "Your name is:";
        echo $this->request->getParam('name');exit;
	}
}
