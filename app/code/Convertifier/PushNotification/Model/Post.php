<?php
namespace Convertifier\PushNotification\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'apicrudtable';

	protected $_cacheTag = 'apicrudtable';

	protected $_eventPrefix = 'apicrudtable';

	protected function _construct()
	{
		$this->_init('Convertifier\PushNotification\Model\ResourceModel\Post');
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