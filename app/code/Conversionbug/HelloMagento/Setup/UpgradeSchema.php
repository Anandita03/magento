<?php

namespace Conversionbug\HelloMagento\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.1.0', '<=')) {

            $setup->getConnection()->addColumn(
                $setup->getTable('Table_example'),
                'email',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 255,
                    'nullable' => true,
                    'comment' => 'Email'
                ]
            );

        }
        if (version_compare($context->getVersion(), '1.1.2', '<=')) {

            $setup->getConnection()->addColumn(
                $setup->getTable('Table_example'),
                'email',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 255,
                    'nullable' => true,
                    'comment' => 'Email'
                ]
            );

        }

        $setup->endSetup();
    }
}