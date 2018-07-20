<?php

namespace Conversionbug\Contact\Block;

use Magento\Framework\View\Element\Template;

class ContactForm extends \Magento\Contact\Block\ContactForm
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
    }

    public function getFormAction()
    {
       echo "override block";
       // return $this->getUrl('contact/index/post', ['_secure' => true]);
    }

    // public function getText() 
    // { 
    //     // $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/debug.log');
	//  	// $logger = new \Zend\Log\Logger();
	//  	// $logger->addWriter($writer);
    //  return "Override Text"; 
    // }
}
