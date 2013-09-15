<?php

/**
 * @category    Inchoo
 * @package     Inchoo_Reinvigorate
 * @author      Branko Ajzele <ajzele@gmail.com>
 * @copyright   Copyright (c) Inchoo
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Inchoo_Reinvigorate_Block_Name_Tags extends Mage_Core_Block_Template {

    protected function _construct() {
        parent::_construct();
        $this->setTemplate('inchoo/reinvigorate/name/tags.phtml');
    }

    public function getCustomer() {
        if ($this->helper('customer')->isLoggedIn()) {
            return Mage::getSingleton('customer/session')->getCustomer();
        }

        return null;
    }

    protected function _toHtml() {
        if (!$this->helper('inchoo_reinvigorate')->isModuleOutputEnabled() || !$this->getCustomer()) {
            return '';
        }
        return parent::_toHtml();
    }

}
