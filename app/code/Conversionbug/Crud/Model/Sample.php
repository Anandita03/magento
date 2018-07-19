<?php
namespace Conversionbug\Crud\Model;
class Sample extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'newtable';

	protected $_cacheTag = 'newtable';

	protected $_eventPrefix = 'newtable';

	protected function _construct()
	{
		$this->_init('Conversionbug\Crud\Model\ResourceModel\Sample');
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