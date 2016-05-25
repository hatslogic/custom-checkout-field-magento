<?php
/*
 * Initialize configuration on install
 */

$config_path  = 'referrer_options/options/from';
$config_value = 'Social media,Word of mouth,Search engine';

//Save config
$installer = $this;
 
$installer->startSetup();
 
$setup = new Mage_Core_Model_Config();
$setup->saveConfig($config_path, $config_value, 'default', 0);

$installer->endSetup();