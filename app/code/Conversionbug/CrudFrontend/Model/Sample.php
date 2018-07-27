<?php
namespace Conversionbug\CrudFrontend\Model;
class Sample extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'crudtable';

	protected $_cacheTag = 'crudtable';

	protected $_eventPrefix = 'crudtable';

	protected function _construct()
	{
		$this->_init('Conversionbug\CrudFrontend\Model\ResourceModel\Sample');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}