<?php

namespace Webkul\IyzicoPayment\Helpers;

class IyzicoApi
{
 public static function options() {
 $options = new \Iyzipay\Options();
 $options->setApiKey("api key");
 $options->setSecretKey("secret key");
 $options->setBaseUrl("base url");
 return $options;
 }
}