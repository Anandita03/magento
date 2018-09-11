<?php
namespace Converty\CustomApi\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'custom';

	protected $_cacheTag = 'custom';

	protected $_eventPrefix = 'custom';

	protected function _construct()
	{
		$this->_init('Converty\CustomApi\Model\ResourceModel\Post');
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