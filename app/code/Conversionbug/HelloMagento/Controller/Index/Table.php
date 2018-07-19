<?php
  
namespace Conversionbug\HelloMagento\Controller\Index;
  
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Conversionbug\HelloMagento\Model\PostFactory;
  
class Table extends Action
{
    /**
     * @var \Conversionbug\HelloMagento\Model\PostFactory
     */
    protected $_modelSampleFactory;
  
    /**
     * @param Context $context
     * @param PostFactory $modelSampleFactory
     */
    public function __construct(
        Context $context,
        PostFactory $modelSampleFactory
    ) {
        parent::__construct($context);
        $this->_modelSampleFactory = $modelSampleFactory;
    }
  
    public function execute()
    {
        $sampleModel = $this->_modelSampleFactory->create();
  
        
        // $item = $sampleModel;
        
        // print_r($item->getData());
  
        // Get sample collection
        $sampleCollection = $sampleModel->getCollection();
        //->addFieldToFilter('name', array('name'=>$table));
        
        // Load all data of collection
        echo '<pre>';
        print_r($sampleCollection->getData());
    }
}
