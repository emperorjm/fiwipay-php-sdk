<?php
namespace FiwiPay\Api;

use FiwiPay\Common\FiwiPayModel;

/**
 * Class RedirectUrls
 * @property string returnUrl
 * @property string cancelUrl
 *
 */

class RedirectUrls extends FiwiPayModel
{

    public function setReturnUrl($url) {
        $this->returnUrl = $url;
        return $this;
    }

    public function getReturnUrl() {
        return $this->returnUrl;
    }

    public function setCancelUrl($url) {
        $this->cancelUrl = $url;
        return $this;
    }

    public function getCancelUrl(){
        return $this->cancelUrl;
    }
}
