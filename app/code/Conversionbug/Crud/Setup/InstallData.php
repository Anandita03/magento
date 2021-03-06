<?php 
namespace Conversionbug\Crud\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Module\Setup\Migration;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        
        $setup->startSetup();

        $tableName = $setup->getTable('newtable');

            $data = [

                    ['name' => 'anana'],
                    ['name' => 'annie'],
                    ['name' => 'madhu']
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);

        $setup->endSetup();
    }

}