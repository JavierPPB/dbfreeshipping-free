

<?php

class dbfreeshippingajaxModuleFrontController extends ModuleFrontController
{

    public function initContent()
    {
        $this->ajax = true;
        parent::initContent();
    }


    public function displayAjax()
    {
        $action = Tools::getValue('action');
        $cart = array();
        
        if($action === 'update_cart'){
            $cart = $this->module->getFreeShippingTotal();
        }
        die(json_encode(array('cart' => $cart)));
    }

}
