<?php

namespace Convertifier\PushNotification\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.1.2', '<=')) {
            $setup->getConnection()->query("INSERT INTO Table_example SET name = 'annie', email = 'annie@inviqa.com'");
            $setup->getConnection()->query("INSERT INTO Table_example SET name = 'hrhrh', email = 'anddse@inviqa.com'");
            $setup->getConnection()->query("INSERT INTO Table_example SET name = 'ydrhr', email = 'andqwd@inviqa.com'");
            $setup->getConnection()->query("INSERT INTO Table_example SET name = 'madhu', email = 'anndqs@inviqa.com'");
            $setup->getConnection()->query("INSERT INTO Table_example SET name = 'aarar', email = 'anniws@inviqa.com'");
            $setup->getConnection()->query("INSERT INTO Table_example SET name = 'jtynjy', email = 'annqqq@inviqa.com'");
            $setup->getConnection()->query("INSERT INTO Table_example SET name = 'rtyjjk', email = 'andasd@inviqa.com'");
        
        
        
        
        
        
        }

        $setup->endSetup();
    }
}