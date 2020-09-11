<?php

namespace Framework;

use Framework\Interfaces\ServiceProviderInterface;

class Cookie implements ServiceProviderInterface
{
    protected $providerName = 'cookie';

    public function register($di)
    {
        echo $this->providerName;
    }

    public function getProviderName()
    {
        return $this->providerName;
    }
}