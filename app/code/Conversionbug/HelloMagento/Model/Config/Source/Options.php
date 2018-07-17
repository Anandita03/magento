<?php
 
namespace Conversionbug\HelloMagento\Model\Config\Source;
 
use Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory;
use Magento\Framework\DB\Ddl\Table;
 
class Options extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    protected $optionFactory;
 
    /*public function __construct(OptionFactory $optionFactory)
    {
        $this->optionFactory = $optionFactory;  
        //we can use this if you want to prepare options dynamically  
    }*/
 
    public function getAllOptions()
    {
        $this->_options=[ ['label'=>'Select Options', 'value'=>''],
                          ['label'=>'Option1', 'value'=>'1'],
                          ['label'=>'Option2', 'value'=>'2'],
                          ['label'=>'Option3', 'value'=>'3']
                         ];
        return $this->_options;
    }

    public function getOptionText($value)
    {
        foreach ($this->getAllOptions() as $option) {
            if ($option['value'] == $value) {
                return $option['label'];
            }
        }
        return false;
    }
 
    public function getFlatColumns()
    {
        $attributeCode = $this->getAttribute()->getAttributeCode();
        return [
            $attributeCode => [
                'unsigned' => false,
                'default' => null,
                'extra' => null,
                'type' => Table::TYPE_INTEGER,
                'nullable' => true,
                'comment' => 'Custom Attribute Options  ' . $attributeCode . ' column',
            ],
        ];
    }
}