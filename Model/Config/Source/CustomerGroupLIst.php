<?php

namespace Burst\Vip\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class CustomerGroupLIst implements ArrayInterface
{
    
    public function __construct(
        \Magento\Customer\Model\ResourceModel\Group\CollectionFactory $groupCollectionFactory
    )
    {
        $this->_groupCollectionFactory = $groupCollectionFactory;
    }

    public function toOptionArray()
    {
        $this->_options = $this->_groupCollectionFactory->create()->loadData()->toOptionArray();
        return $this->_options;
    }
}