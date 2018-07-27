<?php
namespace Conversionbug\CrudFrontend\Model\ResourceModel\Sample;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'crudtable';
	protected $_eventObject = 'crudtable';

	
	protected function _construct()
	{
		$this->_init('Conversionbug\CrudFrontend\Model\Sample', 'Conversionbug\CrudFrontend\Model\ResourceModel\Sample');
	}

}