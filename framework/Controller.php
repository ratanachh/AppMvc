<?php

namespace Framework;

use Framework\Interfaces\ServiceProviderInterface;

class Controller extends Application implements ServiceProviderInterface
{

    protected $di;

    public function register($di)
    {
        $this->di = $di;
    }

    public function getProviderName()
    {
        return $this->providerName;
    }

    public function view($viewName, $data = [])
    {
        
    }
}