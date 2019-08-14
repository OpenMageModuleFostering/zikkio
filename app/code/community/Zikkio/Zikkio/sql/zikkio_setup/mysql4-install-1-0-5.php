<?php

/*
 * DELETE FROM `core_resource` WHERE ((`code` = 'zikkio_setup' AND `code` = 'zikkio_setup' COLLATE utf8mb4_bin));
 */

//die('mysql4-install-1-0-5.php');

$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$installer->startSetup();
$setup->addAttributeGroup('catalog_product', 'Default', 'Zikkio', 1000);

$setup->addAttribute('catalog_product', 'zikkio_asin', array(
    'group' => 'Zikkio',
    'type' => 'text',
    'backend' => '',
    'label' => 'Zikkio ASIN',
    'class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE, //SCOPE_GLOBAL
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => 'simple,configurable,bundle,grouped',
    'is_configurable' => false,
    'visible_on_front' => 0,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front' => 0,
));

$setup->addAttribute('catalog_product', 'zikkio_ean', array(
    'group' => 'Zikkio',
    'type' => 'text',
    'backend' => '',
    'label' => 'Zikkio EAN',
    'class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE, //SCOPE_GLOBAL
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => 'simple,configurable,bundle,grouped',
    'is_configurable' => false,
    'visible_on_front' => 0,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front' => 0,
));

$setup->addAttribute('catalog_product', 'zikkio_msrp', array(
    'group' => 'Zikkio',
    'type' => 'text',
    'backend' => '',
    'label' => 'Zikkio MSRP',
    'class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE, //SCOPE_GLOBAL
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => 'simple,configurable,bundle,grouped',
    'is_configurable' => false,
    'visible_on_front' => 0,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front' => 0,
));

$setup->addAttribute('catalog_product', 'zikkio_retailers_price', array(
    'group' => 'Zikkio',
    'type' => 'text',
    'backend' => '',
    'label' => 'Zikkio Retailers Price',
    'class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE, //SCOPE_GLOBAL
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => 'simple,configurable,bundle,grouped',
    'is_configurable' => false,
    'visible_on_front' => 0,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front' => 0,
));

$setup->addAttribute('catalog_product', 'zikkio_upc', array(
    'group' => 'Zikkio',
    'type' => 'text',
    'backend' => '',
    'label' => 'Zikkio UPC',
    'class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE, //SCOPE_GLOBAL
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => 'simple,configurable,bundle,grouped',
    'is_configurable' => false,
    'visible_on_front' => 0,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front' => 0,
));

$installer->endSetup();
