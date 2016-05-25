<?php
/**
 * @category    Checkout module
 * @package     Twohats_Referrer
 * @copyright   Copyright (c) 2016 2HatsLogic Solutions. (http://www.2hatslogic.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Twohats_Referrer_Model_Adminhtml_Observer
{
    
    public function addOrderReferrerBlock(Varien_Event_Observer $observer){
        $block = $observer->getBlock();
        if(($block->getNameInLayout() == 'order_info') && ($child = $block->getChild('twohats.order.info.referrer'))){
            $transport = $observer->getTransport();
            if($transport){
                $html = $transport->getHtml();
                $html .= $child->toHtml();
                $transport->setHtml($html);
            }
        }
    }

}