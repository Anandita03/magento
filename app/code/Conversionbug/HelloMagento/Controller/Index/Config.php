<?php

namespace Conversionbug\HelloMagento\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Conversionbug\HelloMagento\Helper\Data $helperData

	)
	{
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{

		// TODO: Implement execute() method.

		if($this->helperData->getGeneralConfig('enable'))
		{
			echo $this->helperData->getGeneralConfig('display_text');
		}
		else
		{
			echo "yo";
		}
        exit();
    }
}