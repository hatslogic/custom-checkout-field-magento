<?php
/**
 * @category    Checkout module
 * @package     Twohats_Referrer
 * @copyright   Copyright (c) 2016 2HatsLogic Solutions. (http://www.2hatslogic.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Twohats_Referrer_Model_Options
{
  /**
   * Provide available options as a value/label array
   *
   * @return array
   */
  public function toOptionArray()
  {
    return array(
      array('value'=>'Social media', 'label'=>'Social media'),
      array('value'=>'Word of mouth', 'label'=>'Word of mouth'),
      array('value'=>'Search engine', 'label'=>'Search engine'),            
      array('value'=>'An event', 'label'=>'An event'),
      array('value'=>'A friends house party', 'label'=>'A friends house party'),
      array('value'=>'A blog', 'label'=>'A blog'),
      array('value'=>'Magazine', 'label'=>'Magazine'),
      array('value'=>'newspaper', 'label'=>'newspaper'),
      array('value'=>'TV', 'label'=>'TV'),
      array('value'=>'Other', 'label'=>'Other'),
    );
  }
}