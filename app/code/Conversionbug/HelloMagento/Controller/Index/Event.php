<?php

namespace Conversionbug\HelloMagento\Controller\Index;

class Event extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Conversionbug'));
		$this->_eventManager->dispatch('conversionbug_hellomagento_display_text', ['cb_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}