<?php

namespace Conversionbug\HelloMagento\Controller\Index;

class Event extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		// $textDisplay = new \Magento\Framework\DataObject(array('text' => 'Conversionbug'));
		// $this->_eventManager->dispatch('conversionbug_hellomagento_display_text', ['cb_text' => $textDisplay]);
		// echo $textDisplay->getText();
		// exit;

		// $textDisplay = new \Magento\Framework\DataObject();
		// $this->_eventManager->dispatch('customer_login');
		// echo $textDisplay->getText();
		// exit;


		// $textDisplay = new \Magento\Framework\DataObject();
		// $this->_eventManager->dispatch('checkout_onepage_controller_success_action', ['order_ids' => [$session->getLastOrderId()]]);
		// echo $textDisplay->getText();
		// exit;


		$this->_eventManager->dispatch('catalog_product_save_after');

		// echo 'YY';exit;
		// $textDisplay = new \Magento\Framework\DataObject();
		// $this->_eventManager->dispatch('customer_logout', ['customer' => $this->getCustomer()]);
		// echo $textDisplay->getText();
		// exit;
	}
}