<?php
namespace FiwiPay\Common;


use FiwiPay\Common\Connections;

class FiwiPayModel extends Connections
{

    public $props = [];

    public function __construct($data = null) {
        parent::__construct();
        $class = new \ReflectionClass($this);
        $methods = $class->getMethods();
        foreach($methods as $method) {
            if(!in_array($method->name, $this->props)) {
                $this->props[$method->name] = $method->name;
            }
        }
    }
}
