<?php

namespace Conversionbug\FAQ\Block;

use Magento\Framework\View\Element\Template;

class Faq extends Template
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(\Magento\Backend\Block\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function display()
    {
        echo "FAQ";
    }
}
