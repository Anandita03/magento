<?php

namespace Conversionbug\HelloMagento\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
	// protected $_order;
	// public function __construct(
	// 	\Magento\Sales\Api\Data\OrderInterface $order
    // ) {
	// 	 $this->_order = $order; 
		   
    // }

	// public function execute(\Magento\Framework\Event\Observer $observer)
	// {
		// $displayText = $observer->getData('cb_text');
		// echo $displayText->getText() . " - Event </br>";
		// $displayText->setText('Execute event successfully.');


	//Displaying the name of customer when he/she logins
		// echo "Customer LoggedIn<br/>";
        // $customer = $observer->getEvent()->getCustomer();
        // echo $customer->getName(); //Get customer name
        // exit;
		// return $this;

		// echo "Order Placed<br/>";
		// $order = $observer->getEvent()->getOrder();
		// // $quote = $observer->getQuote();
		// echo "order";

	// protected $logger;  
    // public function __construct(        
    //     \Psr\Log\LoggerInterface $logger
    // ) {
    //     $this->logger = $logger;       
    // }
 
	public function execute(\Magento\Framework\Event\Observer $observer)
	{       
		
		// $orderids = $observer->getEvent()->getOrderIds();

        // foreach($orderids as $orderid){
        //     $order = $this->_order->load($orderid);
        // }
		$product = $observer->getEvent()->getProduct();


		// $pro = $observer->getProduct()->getName();
		// $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/debug.log');
		// $logger = new \Zend\Log\Logger();
		// $logger->addWriter($writer);
		// $logger->info($pro->getName());

    //     $order = $observer->getEvent()->getOrder();
    // // $order_id = $order->getID();
    // $order_number = $order->getIncrementId();
    // foreach ($order->getAllItems() as $item) {
    //         $ProdustIds[] = $item->getProductId();
    //         $ProdustSku[] = $item->getSku();
    //         $proName[] = $item->getName(); //product name
    //         $this->_logger->addDebug('Item Name: ' . $item->getName() . 'Item ID: ' . $item->getProductId());
    //     }
        
			// $logger->info(print_r($order->getOrder(), true));
        // if (count($orderIds)) {
        //     $orderId = $orderIds[0];            
        //     $order = $this->_orderFactory->create()->load($orderId);
        //     $shippingAddress = $order->getShippingAddress();
        //     echo "Order";
		// 	$this->logger->debug('Logging HelloWorld Observer'); 
		
	//Displaying the name of customer when he/she logins
		// $customer = $observer->getEvent()->getCustomer();	
		// $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/debug.log');
		// $logger = new \Zend\Log\Logger();
		// $logger->addWriter($writer);
		// $logger->info($customer->getName());

		// $this->logger->debug('Customer logout');
		// $this->_logger->info('Customer logout');

		// echo "Order";
		// 	$quote = $observer->getEvent()->getQuote();
		// 	if ($quote->getIsCheckoutCart()) {
		// 	$a = $this->checkoutSession->getQuoteId($quote->getId());
		// 		echo $a;
		// 	}
	}
	}