<?php

namespace Conversionbug\HelloMagento\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.1.0', '<=')) {
            $setup->getConnection()->query("INSERT INTO Table_example SET name = 'annie', email = 'annie@inviqa.com'");
        }

        $setup->endSetup();
    }
}