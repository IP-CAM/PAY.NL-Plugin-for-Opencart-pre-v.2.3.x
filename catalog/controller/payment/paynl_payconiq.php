<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlpayconiq extends Pay_Controller_Payment {

    protected $_paymentOptionId = 2379;
    protected $_paymentMethodName = 'paynl_payconiq';

}
