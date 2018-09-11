<?php
namespace Convertifier\PushNotification\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'apicrudtable';
	protected $_eventObject = 'apicrudtable';

	
	protected function _construct()
	{
		$this->_init('Convertifier\PushNotification\Model\Post', 'Convertifier\PushNotification\Model\ResourceModel\Post');
	}

}