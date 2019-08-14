<?php

class Zikkio_Zikkio_Model_Observer {
    
    protected function _isAllowed() {
        return true;
    }
    
    /*
    public function cloneMSRP(Varien_Event_Observer $observer) {
        //Mage::log('Zikkio_Zikkio_Model_Observer@cloneMSRP()', null, 'HPO.log');
        
        $product    = $observer->getEvent()->getProduct();
        
        //Mage::log($product->getId(), null, 'HPO.log');
        $productId = $product->getId();
        //Mage::log($product->getStoreId(), null, 'HPO.log');
        $storeId = $product->getStoreId();
        
        $msrp_default = Mage::getResourceModel('catalog/product')->getAttributeRawValue($productId, 'msrp', $storeId);
        $zikkio_msrp = Mage::getResourceModel('catalog/product')->getAttributeRawValue($productId, 'zikkio_msrp', $storeId);
        
        //Mage::log($msrp_default, null, 'HPO.log');
        //Mage::log($zikkio_msrp, null, 'HPO.log');
        
        if(!$zikkio_msrp) {
            $product->setData('zikkio_msrp', $msrp_default);
            $product->save();
        }
        
    }
    */
    public function saveApiKey() {

        $zikkio_api_key = Mage::getStoreConfig('zikkio_settings/zikkio_api', Mage::app()->getStore());
		
        Mage::log('Zikkio_Zikkio_Model_Observer@saveApiKey()-> '.$zikkio_api_key['zikkio_api'], null, 'HPO.log');

        $root_magento = Mage::getBaseDir();
        $zikkio_bridge_directory = $root_magento . "/bridge2cart";

        $file = $root_magento . "/bridge2cart/config.php";

        $content_file = '<?php define("M1_TOKEN", "' . $zikkio_api_key['zikkio_api'] . '");';
		
		chmod($file, 0777);
		chmod($zikkio_bridge_directory, 0777);

        file_put_contents($file, $content_file);
		
		if (chmod($file, 0777)) {
            chmod($file, 0644);
        }

        if (chmod($zikkio_bridge_directory, 0777)) {
            chmod($zikkio_bridge_directory, 0755);
        }
    }

}