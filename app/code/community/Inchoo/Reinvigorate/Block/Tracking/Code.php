<?php

/**
 * @category    Inchoo
 * @package     Inchoo_Reinvigorate
 * @author      Branko Ajzele <ajzele@gmail.com>
 * @copyright   Copyright (c) Inchoo
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Inchoo_Reinvigorate_Block_Tracking_Code extends Mage_Core_Block_Template {

    protected function _construct() {
        parent::_construct();
        $this->setTemplate('inchoo/reinvigorate/tracking/code.phtml');
    }

    protected function _toHtml() {
        if (!$this->helper('inchoo_reinvigorate')->isModuleOutputEnabled()) {
            return '';
        }
        return parent::_toHtml();
    }

}
