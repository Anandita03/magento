<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Convertifier\PushNotification\Api;

/**
 * Customer CRUD interface.
 * @api
 * @since 100.0.2
 */
interface CrudRepositoryInterface
{
    /**
     * Returns greeting message to user
     *
     * PUT for test api
     * @param string[] $data
     * @return string Greeting message 
     */

     public function save($data);

     /**
     * POST for test api
     * @param string[] $data
     * @return string
     */

    public function create($data);
    
    /**
     * Get customer by ID.
     *
     * @param int $id
     * @return string Greeting message
     */
    public function get($id);

    /**
     * Delete customer by ID.
     *
     * @param int $id
     * @return bool true on success
     */
    public function deleteById($id);
}
