<?php
namespace Conversionbug\HelloMagento\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'entity_id';
	protected $_eventPrefix = 'Table_example';
	protected $_eventObject = 'Table_example';

	
	protected function _construct()
	{
		$this->_init('Conversionbug\HelloMagento\Model\Post', 'Conversionbug\HelloMagento\Model\ResourceModel\Post');
	}

}