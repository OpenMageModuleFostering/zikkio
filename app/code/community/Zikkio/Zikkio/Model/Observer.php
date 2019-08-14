<?php
class Zikkio_Zikkio_Model_Observer {

    public function saveApiKey() {

		    $zikkio_api_key = Mage::getStoreConfig('catalog/zikkio/zikkio_api', Mage::app()->getStore());

        $root_magento = Mage::getBaseDir();
		$zikkio_bridge_directory = $root_magento."/bridge2cart";

        $file = $root_magento."/bridge2cart/config.php";

        $content_file = '<?php define("M1_TOKEN", "'.$zikkio_api_key.'");';

        file_put_contents($file, $content_file);
		
		if( chmod($zikkio_bridge_directory, 0777) ) {
		    // more code
		    chmod($zikkio_bridge_directory, 0755);
		}
    }
	
}
