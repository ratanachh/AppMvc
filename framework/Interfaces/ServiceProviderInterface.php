<?php

namespace Framework\Interfaces;

interface ServiceProviderInterface
{
    /**
     * @var Container $di
     */
    function register($di);
}