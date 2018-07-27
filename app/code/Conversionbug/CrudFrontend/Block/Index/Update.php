<?php
 
 
namespace Conversionbug\CrudFrontend\Block\Index;

use Magento\Framework\View\Element\Template\Context;
use Conversionbug\CrudFrontend\Model\Sample;
use Magento\Framework\View\Element\Template;
 
class Update extends Template
{
    protected $_postFactory;
 
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Conversionbug\CrudFrontend\Model\SampleFactory $postFactory
    )
    {
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function getSaveAction(){
        return $this->getUrl('crudfrontend/index/updatePost');
        }
        
        public function getTableData()
        {
            $id = $this->getRequest()->getParam('id');
            $post = $this->_postFactory->create();
            $collection = $post->load($id);
            //var_dump($collection->getData());
            //exit;
            return $collection;
        }
}