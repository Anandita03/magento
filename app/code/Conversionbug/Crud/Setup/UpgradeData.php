<?php
  
namespace Conversionbug\Crud\Setup;
  
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
  
class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
  
        if (version_compare($context->getVersion(), '1.1.2') < 0) {
            $tableName = $setup->getTable('newtable');
            if ($setup->getConnection()->isTableExists($tableName) == true) {
                // Declare data
                $data = [
                        'name' => 'Anandita',
                        'email' => 'anandita.bhui@conversionbug.com'
                ];
                $setup->getConnection()->update($tableName,$data, 'id IN (1)');  //update a record
                $setup->getConnection()->delete($tableName, 'id IN (4)');       //delete a record
            }
        }
  
        $setup->endSetup();
    }
}