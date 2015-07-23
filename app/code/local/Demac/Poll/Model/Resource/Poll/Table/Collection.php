<?php
/**
 * Created by PhpStorm.
 * User: davidfreiman
 * Date: 15-07-23
 * Time: 3:19 PM
 */ 
class Demac_Poll_Model_Resource_Poll_Table_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

    protected function _construct()
    {
        $this->_init('demac_poll/poll_table');
    }

}