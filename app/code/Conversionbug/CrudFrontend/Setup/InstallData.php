<?php 
namespace Conversionbug\CrudFrontend\Setup;

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

        $tableName = $setup->getTable('crudtable');

            $data = [

                    ['name' => 'ananya', 'age' => '23'],
                    ['name' => 'annie', 'age' => '24'],
                    ['name' => 'madhu', 'age' => '25']
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);

        $setup->endSetup();
    }

}