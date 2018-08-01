<?php 
namespace Conversionbug\FAQ\Setup;

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

        $tableName = $setup->getTable('table_faq');

        $value = [
            'entity_type' => 'faq-faq',
            'entity_id' => '1',
            'request_path' => FAQ::FAQ_REQUEST_PATH,
            'target_path' => FAQ::FAQ_TARGET_PATH,
            'is_autogenerated' => '1'
        ];
        $setup
        ->getConnection()
        ->insertMultiple($tableName, $value);

        $setup->endSetup();
    }
}