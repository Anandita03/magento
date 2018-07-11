<?php
namespace Conversionbug\HelloMagento\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{

    public function __construct(\Magento\Framework\App\Action\Context $context
    )
    {

        return parent::__construct($context);
    }

    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        echo $objectManager->get('Magento\Store\Model\StoreManagerInterface')
                    ->getStore()
                    ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        echo "<br/>";
        echo 'Hello Magento 2! Myself Controller!';
       // $this->_objectManager->create('Conversionbug\HelloMagento\Helper\Data')->helperFunc();
        $this->_redirect('contact');
        

    }
    public function disp()
    {
        echo "helo";
    }
    
}


