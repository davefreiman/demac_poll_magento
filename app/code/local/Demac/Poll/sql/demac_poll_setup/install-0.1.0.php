<?php
/**
 * Created by PhpStorm.
 * User: davidfreiman
 * Date: 15-07-23
 * Time: 2:45 PM
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();


$installer->run("DROP TABLE IF EXISTS {$this->getTable('demac_poll/poll_table')};");

$table = $installer->getConnection()
    ->newTable($installer->getTable('demac_poll/poll_table'))
    ->addColumn('poll_table_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'ID')
    ->addColumn('poll_name', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ), 'Poll Name')
    ->addColumn('best_answer', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ), 'Best Answer')
    ->addColumn('number_of_votes_for_best_answer', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable'  => true,
    ), 'Number of Votes for Best Answer')
    ->addColumn('ip_address_of_best_voter', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable'  => true
    ), 'IP Address of Best Voter')
;
$installer->getConnection()->createTable($table);

$installer->endSetup();