<?php
namespace FiwiPay\Api;

use FiwiPay\Common\FiwiPayModel;

/**
 * Class Transaction
 * @property \FiwiPay\Api\Amount amount
 *
 */

class Transaction extends FiwiPayModel
{

    /**
     * @param \FiwiPay\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount){
        $this->amount = $amount;
        return $this;
    }

    public function getAmount(){
        return $this->amount;
    }
}
