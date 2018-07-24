<?php
 
namespace Conversionbug\PluginExample\Plugin;
 
class LogPriceModel{
 
	protected $logger;
 
	public function __construct(
		\Psr\Log\LoggerInterface $loggerInterface
	) {
		$this->logger = $loggerInterface;
	}
 
	/**
	 * Performs logs around the price model
	 *
	 * @param \Magento\Catalog\Model\Product $product
	 * @param \Closure $proceed
	 */
	public function aroundGetPriceModel(\Magento\Catalog\Model\Product $product, \Closure $proceed) {
		$this->logger->debug('fetching price model for ' . get_class($product));
		$result = $proceed();
		$this->logger->debug('Price model is ' . get_class($result));
		return $result;
	}
}