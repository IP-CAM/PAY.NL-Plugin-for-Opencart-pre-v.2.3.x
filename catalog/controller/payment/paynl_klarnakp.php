<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlklarnakp extends Pay_Controller_Payment {

    protected $_paymentOptionId = 2265;
    protected $_paymentMethodName = 'paynl_klarnakp';

}
