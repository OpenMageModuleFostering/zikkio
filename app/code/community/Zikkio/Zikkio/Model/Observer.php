<?php
class Zikkio_Zikkio_Model_Observer {
    
    public function saveApiKey() {
        
		$zikkio_api_key = Mage::getStoreConfig('catalog/zikkio/zikkio_api', Mage::app()->getStore());
        $content_file = '';
        $root_magento = Mage::getBaseDir();
        
        $file = $root_magento."/bridge2cart/bridge.php";
        $fh = fopen($file, 'r');

      	while (($row_file = fgets($fh)) !== false) {
           
            if(preg_match('/M1_TOKEN/i', $row_file)) {
                $content_file = $content_file . "\n".'define("M1_TOKEN", "'.$zikkio_api_key.'");'."\n"; 
            }else{
                $content_file = $content_file . $row_file;
            }            
        }
        file_put_contents($file, $content_file);
        fclose($fh); 
    }
}