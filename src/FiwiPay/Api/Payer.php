<?php
namespace FiwiPay\Api;


use FiwiPay\Common\FiwiPayModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends FiwiPayModel {

    /**
     * @param string $method
     * Valid Values: ["fiwipay"]
     * method will be like fiwipay, paypal, stripe etc
     * @return $this
     */
    public function setPaymentMethod($method) {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod() {
        return $this->paymentMethod;
    }
}
