<?php
namespace Conversionbug\HelloMagento\Block;
class HelloWorld extends \Magento\Framework\View\Element\Template
{
        protected $_urlInterface;
        public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Framework\UrlInterface $urlInterface    
    )
    {         
        $this->_urlInterface = $urlInterface;
        parent::__construct($context);
    }
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    /**
     * Prining URLs using URLInterface
     */
    public function getUrlInterfaceData()
    {
        echo $this->_urlInterface->getUrl() . '<br />';
    }
}
?>