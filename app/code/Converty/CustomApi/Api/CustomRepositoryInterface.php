<?php
 
namespace Converty\CustomApi\Api;
 
interface CustomRepositoryInterface
{
	/**
	 * Create custom Api.
	 *
	 * @param \Converty\CustomApi\Api\Data\CustomDataInterface $entity
	 * @return \Converty\CustomApi\Api\Data\CustomDataInterface
	 * @throws \Magento\Framework\Exception\LocalizedException
	 */

	public function create(\Converty\CustomApi\Api\Data\CustomDataInterface $entity);
	
	/**
	 * Update custom Api.
	 *
	 * @param \Converty\CustomApi\Api\Data\CustomDataInterface $entity
	 * @return \Converty\CustomApi\Api\Data\CustomDataInterface
	 * @throws \Magento\Framework\Exception\LocalizedException
	 */

	public function update(\Converty\CustomApi\Api\Data\CustomDataInterface $entity);
	
	/**
	 * Get custom Api.
	 *
	 * @param int $id
	 * @return \Converty\CustomApi\Api\Data\CustomDataInterface
	 * @throws \Magento\Framework\Exception\LocalizedException
	 */

	public function get($id);
	
	/**
	 * Delete custom Api.
	 *
	 * @param int $id
	 * @return bool Will returned True if deleted
	 * @throws \Magento\Framework\Exception\LocalizedException
	 */
	
	public function delete($id);
}