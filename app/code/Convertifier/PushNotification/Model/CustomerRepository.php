<?php
namespace Convertifier\PushNotification\Model;

use Convertifier\PushNotification\Api\CrudRepositoryInterface;
use Magento\Framework\App\Action\Action;

class CustomerRepository implements CrudRepositoryInterface
{  
    protected $_postFactory;

    public function __construct(
        \Convertifier\PushNotification\Model\PostFactory $postFactory
    ){
         $this->_postFactory = $postFactory;    
    }
    
    /**
     * {@inheritdoc}
     */
    
    public function save($data)
    {       
        $post = $this->_postFactory->create();
        
        $id = $data['id'];
        $name = $data['name'];
        $email =$data['email'];
        
        $post->setId($id)
            ->setName($name)
            ->setEmail($email)
            ->save();
        
        return 'successfully updated';
    }

     /**
     * POST for test api
     * @param string[] $data
     * @return string
     */
    
     public function create($data)
    {
        $post = $this->_postFactory->create();

        $name = $data['name'];
        $email =$data['email'];

        $post->setName($name)
            ->setEmail($email)
            ->save();

        return 'successfully saved';   
    }

    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return object Greeting message with users name.
     */
   
     public function get($id)
    {
        $post = $this->_postFactory->create();
        //Load the item with ID
        $item = $post->load($id);
        return $item->getData();
    }

    /**
     * Delete customer address by ID.
     *
     * @param int $id
     * @return bool true on success
     */
    
     public function deleteById($id)
    {
        $post = $this->_postFactory->create();
        //Load the item with ID
        $item = $post->load($id);
        $post->delete();
        return true;
    }
}
