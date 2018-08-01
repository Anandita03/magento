<?php
namespace Conversionbug\FAQ\Model;
class Sample extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'table_faq';

	protected $_cacheTag = 'table_faq';

	protected $_eventPrefix = 'table_faq';

	protected function _construct()
	{
		$this->_init('Conversionbug\FAQ\Model\ResourceModel\Sample');
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