<?php
/**
 * @category    Checkout module
 * @package     Twohats_Referrer
 * @copyright   Copyright (c) 2016 2HatsLogic Solutions. (http://www.2hatslogic.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Twohats_Referrer_Model_Observer
{
	/*
     * Save data on placing an order
     *
     */
    public function saveReferrer( $event )
    {
		$order = $event->getOrder();
    	$referrer = Mage::app()->getRequest()->getPost('referrer');
		$order->setReferrer($referrer);
		$order->save();
    }
}