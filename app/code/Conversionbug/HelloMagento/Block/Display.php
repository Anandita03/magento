<?php
namespace Conversionbug\HelloMagento\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	protected $helper;
	
	public function __construct(\Magento\Framework\View\Element\Template\Context $context,
	\Conversionbug\HelloMagento\Helper\Data $helper)
	{
		$this->helper = $helper;
		parent::__construct($context);
	}

	public function sayHello()
	{
		return $this->helper->helperFunc();
		//return 'hi magento2';
	}

	// public function sayHello1()
	// {
	// 	 return 'hi magento2';
	// }
	
}