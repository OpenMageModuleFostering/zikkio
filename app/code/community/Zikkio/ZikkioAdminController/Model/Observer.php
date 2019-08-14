<?php
class Zikkio_ZikkioAdminController_Model_Observer {
    
    public function saveApiKey() {
        Mage::log('ZikkioAdminZikkio_CreateAdminController_Model_Options -> saveApiKey()', null, 'HPO_LOG.log');
        
        $zikkio_api_key = Mage::getStoreConfig('catalog/zikkio/zikkio_api', Mage::app()->getStore());
        //Mage::log($zikkio_api_key, null, 'HPO_LOG.log');

        $content_file = '';
        
        $root_magento = Mage::getBaseDir();
        
        //Mage::log($root_magento, null, 'HPO_LOG.log');
        
        $file = $root_magento."/bridge2cart/bridge.php";
        $fh = fopen($file, 'r');

       while (($row_file = fgets($fh)) !== false) {
           
            //Mage::log($row_file, null, 'HPO_LOG.log');
            
            if(preg_match('/M1_TOKEN/i', $row_file)) {
                $content_file = $content_file . "\n".'define("M1_TOKEN", "'.$zikkio_api_key.'");'."\n"; 
                //Mage::log($row_file, null, 'HPO_LOG.log');
            }else{
                $content_file = $content_file . $row_file;
            }            
            
        }
        
        //Mage::log($content_file, null, 'HPO_LOG.log');

        file_put_contents($file, $content_file);

        fclose($fh); 
        
    }
}
?>