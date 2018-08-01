<?php
namespace Conversionbug\FAQ\Model\ResourceModel\Sample;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'faq_id';
	protected $_eventPrefix = 'table_faq';
	protected $_eventObject = 'table_faq';

	
	protected function _construct()
	{
		$this->_init('Conversionbug\FAQ\Model\Sample', 'Conversionbug\FAQ\Model\ResourceModel\Sample');
	}

}