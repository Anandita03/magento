<?php
 
namespace Converty\CustomApi\Model\Data;
 
use \Magento\Framework\Api\AttributeValueFactory;
 
/**
 * Class Custom Data
 */
class CustomData extends \Magento\Framework\Api\AbstractExtensibleObject implements
\Converty\CustomApi\Api\Data\CustomDataInterface
{
	/**
	 * Get Id.
	 *
	 * @return int|null
	 */

	public function getId()
	{
		return $this->_get(self::ID);
	}
	
	/**
	 * Set Id.
	 *
	 * @param int $id
	 * @return $this
	 */

	public function setId($id = null)
	{
		return $this->setData(self::ID, $id);
	}
	
	/**
	 * Get Customer Name.
	 *
	 * @return string
	 */

	public function getCustomerName()
	{
		return $this->_get(self::CUSTOMER_NAME);
	}
	
	/**
	 * Set Customer Name.
	 *
	 * @param string $name
	 * @return $this
	 */

	public function setCustomerName($name)
	{
		return $this->setData(self::CUSTOMER_NAME, $name);
	}
	
	/**
	 * Get Customer Email.
	 *
	 * @return string
	 */

	public function getCustomerEmail()
	{
		return $this->_get(self::CUSTOMER_EMAIL);
	}
	
	/**
	 * Set Customer Email.
	 *
	 * @param string $email
	 * @return $this
	 */

	public function setCustomerEmail($email)
	{
		return $this->setData(self::CUSTOMER_EMAIL, $email);
	}

	/**
	 * Get Customer Age.
	 *
	 * @return int
	 */

	public function getCustomerAge()
	{
		return $this->_get(self::CUSTOMER_AGE);
	}
	
	/**
	 * Set Customer Age.
	 *
	 * @param int $age
	 * @return $this
	 */
	
	public function setCustomerAge($age)
	{
		return $this->setData(self::CUSTOMER_AGE, $age);
	}
 
}