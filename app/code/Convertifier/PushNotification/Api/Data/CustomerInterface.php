<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Customer\Api\Data;

/**
 * Customer interface.
 * @api
 * @since 100.0.2
 */
interface CustomerInterface extends \Magento\Framework\Api\CustomAttributesDataInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */
    const ID = 'id';
    const EMAIL = 'email';
    const NAME = 'name';
    /**#@-*/

    /**
     * Get customer id
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set customer id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get email address
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set email address
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email);

    /**
     * Get first name
     *
     * @return string
     */
    public function getName();

    /**
     * Set first name
     *
     * @param string $firstname
     * @return $this
     */
    public function setName($name);

}
