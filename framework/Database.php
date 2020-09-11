<?php

namespace Framework;

use Framework\Interfaces\ServiceProviderInterface;

class Database implements ServiceProviderInterface
{

    protected $providerName = 'database';
    protected $di;

    public function register($di)
    {
        $this->di = $di;
    }

    public function getProviderName()
    {
        return $this->providerName;
    }
}