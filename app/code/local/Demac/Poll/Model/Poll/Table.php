<?php
/**
 * Created by PhpStorm.
 * User: davidfreiman
 * Date: 15-07-23
 * Time: 3:19 PM
 */ 
class Demac_Poll_Model_Poll_Table extends Mage_Core_Model_Abstract
{

    protected function _construct()
    {
        $this->_init('demac_poll/poll_table');
    }

}