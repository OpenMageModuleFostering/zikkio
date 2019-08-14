<?php

class HPOAdminZikkio_CreateAdminController_Adminhtml_CustomController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
	 $this->_setActiveMenu('simpleadmin/simple_one');
	 $leftBlock=$this->getLayout()
	 ->createBlock('core/text', 'left-admin-block')
	 ->setText('<h1>Blocco di sinistra</h1>');
	 $contentBlock=$this->getLayout()
	 ->createBlock('core/text', 'content-admin-block')
	 ->setText('<h1>Blocco centrale</h1>');
	 $this->_addLeft($leftBlock);
	 $this->_addContent($contentBlock);
	 $this->renderLayout();
    }

}