<?php
namespace Conversionbug\Crud\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_postFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Conversionbug\Crud\Model\SampleFactory $postFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		return parent::__construct($context);
    }
    
	public function execute()
	{
        //echo "hi";
		$post = $this->_postFactory->create();
       $collection = $post->getCollection();
        //print_r($collection->addFieldToFilter('id','2')->getData());
        // print_r($collection->addFieldToFilter('id', array('eq' => '6'))->getData());
        // print_r($collection->addFieldToFilter('id', array('neq' => '7'))->getData());
       // print_r($collection->addFieldToFilter('id',array('gteq'=>'3'))->getData());
       // print_r($collection->addFieldToFilter('id',array('lteq'=>'3'))->getData());
        //print_r($collection->addFieldToFilter('name',array('like' => '%ad%'))->getData());
       // print_r($collection->addFieldToFilter('name',array('nlike' => '%ad%'))->getData());
      // print_r($collection->addFieldToFilter('name',array('nlike' => '%ad%'))->getData());
      //print_r($collection->addFieldToFilter('id',array('from' => '2','to' => '7','name' => true))->getData());
         
      
      // Load the item with ID is 1
        //  $item = $post->load(1);
        //  var_dump($item->getData());

         // to perform read operation
		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getName()); //to get names
            echo "</pre>";
            print_r($item->getId()); //to get ids
            echo "</pre>";
            print_r($item->getEmail()); //to get emails

        }
        
        // $item->setName('abc');     //update a record
        // $item->save();

      //  $item->delete();         //delete a record

		exit();
		return $this->_pageFactory->create();
	}
}
