<?php

/**
 * @category    Inchoo
 * @package     Inchoo_Reinvigorate
 * @author      Branko Ajzele <ajzele@gmail.com>
 * @copyright   Copyright (c) Inchoo
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Inchoo_Reinvigorate_Helper_Data extends Mage_Core_Helper_Data {

    const CONFIG_ACTIVE = 'inchoo_reinvigorate/settings/active';
    const CONFIG_API_KEY = 'inchoo_reinvigorate/settings/api_key';

    public function isModuleEnabled($moduleName = null) {
        if (Mage::getStoreConfig(self::CONFIG_ACTIVE) == '0') {
            return false;
        }

        return parent::isModuleEnabled($moduleName = null);
    }

    public function getApiKey($store = null) {
        return Mage::getStoreConfig(self::CONFIG_API_KEY, $store);
    }

}