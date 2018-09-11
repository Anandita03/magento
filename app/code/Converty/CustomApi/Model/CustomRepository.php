<?php

namespace Converty\CustomApi\Model;
use Converty\CustomApi\Api\CustomRepositoryInterface;
use Converty\CustomApi\Api\Data\CustomDataInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\InputException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\App\Action\Action;

class CustomRepository implements CustomRepositoryInterface
{
	
	public function __construct(
			\Converty\CustomApi\Api\Data\CustomDataInterfaceFactory $customFactory,
			\Converty\CustomApi\Model\PostFactory $postFactory,
			\Magento\Framework\Api\ExtensibleDataObjectConverter $extensibleDataObjectConverter
	) {
		$this->_postFactory = $postFactory;   
		$this->customFactory=$customFactory;
		$this->extensibleDataObjectConverter = $extensibleDataObjectConverter;
	}

	 /**
     * {@inheritdoc}
     */

	public function create(CustomDataInterface $data){		
		$customDataArray = $this->extensibleDataObjectConverter
		->toNestedArray($data, [], 'Converty\CustomApi\Api\Data\CustomDataInterface');
		
		//Saving custom data in the table
		$name = $data->getCustomerName();
		$age=$data->getCustomerAge();
		$email = $data->getCustomerEmail();
		
		$customDataArray['name']=$name;
		$customDataArray['age']=$age;
		$customDataArray['email']=$email;

		$customModel=$this->_postFactory->create();
		$customModel->setData($customDataArray);
		$customModel->save();
				
		$customId=$customModel->getId();
		$data->setId($customId);
		return $data;
	}

	 /**
     * {@inheritdoc}
     */
	
	public function update(CustomDataInterface $data){
		$id=$data->getId();
		if(!$this->_postFactory->create()->load($id)->getData()){
			throw new InputException(__("Invalid ID provided",$id));
		}
		else{
			$post = $this->_postFactory->create()->load($id);
			
			//Check if id exists
			if(!$post->getId()){
				throw new InputException(__("ID do not exist",$data->getId()));
			}
			
			$customDataArray = $this->extensibleDataObjectConverter
			->toNestedArray($data, [], 'Converty\CustomApi\Api\Data\CustomDataInterface');
			
			//Updating custom data in the table
			$id = $data->getId();
			$name = $data->getCustomerName();
			$age=$data->getCustomerAge();
			$email = $data->getCustomerEmail();
			
			$customDataArray['name']=$name;
			$customDataArray['age']=$age;
			$customDataArray['email']=$email;
			
			$customModel=$this->_postFactory->create();
			$customModel->setData($customDataArray);
			$customModel->save();
			$customId=$customModel->getId();
		 }
		$data->setId($customId);
		return $data;
	}
	
	 /**
     * {@inheritdoc}
     */

	public function get($id){
		if(!$this->_postFactory->create()->load($id)->getData()){
			throw new InputException(__("Invalid ID provided",$id));
		}
		else{
			$modelData=$this->_postFactory->create()->load($id)->getData();
		}
		$result=array();
		$result[]=$modelData;
		return $result;
	}

	 /**
     * {@inheritdoc}
     */
	
	public function delete($id){
		if(!$this->_postFactory->create()->load($id)->getData()){
			throw new InputException(__("Invalid ID provided",$id));
		}
		else{
			$this->_postFactory->create()->load($id)->delete();
			return true;
		}
	}
}