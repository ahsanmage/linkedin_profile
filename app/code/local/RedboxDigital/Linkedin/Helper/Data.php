<?php
class RedboxDigital_Linkedin_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function isRequired() {
        return Mage::getStoreConfig("customer/redbox/linkedin_profile");
    }
}