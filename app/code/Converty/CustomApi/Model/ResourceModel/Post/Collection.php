<?php
namespace Converty\CustomApi\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'custom';
	protected $_eventObject = 'custom';

	
	protected function _construct()
	{
		$this->_init('Converty\CustomApi\Model\Post', 'Converty\CustomApi\Model\ResourceModel\Post');
	}

}