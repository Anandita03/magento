<?php
namespace Conversionbug\HelloMagento\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'Table_example';

	protected $_cacheTag = 'Table_example';

	protected $_eventPrefix = 'Table_example';

	protected function _construct()
	{
		$this->_init('Conversionbug\HelloMagento\Model\ResourceModel\Post');
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