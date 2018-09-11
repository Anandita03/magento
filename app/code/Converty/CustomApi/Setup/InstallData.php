<?php 
namespace Converty\CustomApi\Setup;

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

        $tableName = $setup->getTable('custom');

            $data = [

                    ['name' => 'ananya','age' => '20','email' => 'xyz@gmail.com'],
                    ['name' => 'annie','age' => '20','email' => 'xyz@gmail.com'],
                    ['name' => 'madhu','age' => '20','email' => 'xyz@gmail.com']
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);

        $setup->endSetup();
    }

}