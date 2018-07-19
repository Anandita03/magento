<?php
namespace Conversionbug\Crud\Model\ResourceModel\Sample;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'newtable';
	protected $_eventObject = 'newtable';

	
	protected function _construct()
	{
		$this->_init('Conversionbug\Crud\Model\Sample', 'Conversionbug\Crud\Model\ResourceModel\Sample');
	}

}