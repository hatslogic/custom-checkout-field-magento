<?php
$installer = $this;

$installer->startSetup();

//Create sql
$installer->getConnection()->addColumn($installer->getTable('sales_flat_order'), 'referrer', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
		'nullable' => false,
		'default' => '',		
	), 'Referrer');

//End sql
$installer->endSetup();