<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;
class ControllerPaymentPaynl extends Pay_Controller_Admin {
    protected $_paymentOptionId = 2931;
    protected $_paymentMethodName = 'paynl_';

    protected $_defaultLabel = '';


}
