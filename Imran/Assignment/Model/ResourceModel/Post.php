<?php
namespace Imran\Assignment\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('imran', 'id');
    }
}
