<?php

namespace WebkulIyzicoPayment\Payment;

use Webkul\Payment\Payment\Payment;

class WebkulIyzicoPayment extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'webkuliyzicopayment';

    public function getRedirectUrl()
    {
        
    }
}