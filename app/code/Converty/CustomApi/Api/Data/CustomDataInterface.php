<?php
 
namespace Converty\CustomApi\Api\Data;
 
/**
 * Custom Data interface.
 * @api
 */
interface CustomDataInterface extends \Magento\Framework\Api\CustomAttributesDataInterface
{
	/**#@+
	 * Constants defined for keys of the data array. Identical to the name of the getter in snake case
	 */
	const ID = 'id';
 
	const CUSTOMER_NAME = 'name';
	
	const CUSTOMER_EMAIL = 'email';

	const CUSTOMER_AGE = 'age';
	/**#@-*/
 
	/**
	 * Get Id.
	 *
	 * @return int|null
	 */

	public function getId();
 
	/**
	 * Set Id.
	 *
	 * @param int $id
	 * @return $this
	 */

	public function setId($id = null);
 
	/**
	 * Get Customer Name.
	 *
	 * @param string $name
	 * @return string
	 */

	public function getCustomerName();
 
	/**
	 * Set Customer Name.
	 *
	 * @param string $name
	 * @return string
	 */

	public function setCustomerName($name);

	 /**
	 * Get Customer Age.
	 *
	 * @param int $age
	 * @return int
	 */

	public function getCustomerAge();
	
	/**
	 * Set Customer Age.
	 *
	 * @param int $age
	 * @return $this
	 */

	public function setCustomerAge($age);

	/**
	 * Get Customer Email.
	 *
	 * @param string $email
	 * @return string
	 */

	public function getCustomerEmail();
	
	/**
	 * Set Customer Email.
	 *
	 * @param string $email
	 * @return string
	 */

	public function setCustomerEmail($email);	
}