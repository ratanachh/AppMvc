<?php

namespace App;

use DI\ContainerBuilder;
use Framework\Application as MvcApplication;

class Application
{

    /**
     * @var Container $di;
     */
    protected $di;

    public function __construct(string $rootPath)
    {
        $this->di = ContainerBuilder::buildDevContainer();
        $this->app      = $this->createApplication();
        $this->rootPath = $rootPath;

        $this->initializeProviders();

    }

    protected function createApplication(): MvcApplication
    {
        return new MvcApplication($this->di);

    }

    public function run(): string
    {
        /**
         * @var ResponseInterface $response
         */
        $response = $this->app->handle(BASE_URI);
        var_dump($this->app->getRegisterClasses());

        return (string) 'hello';//$response->getContent();

    }

    protected function initializeProviders(): void
    {
        $filename = $this->rootPath.'/config/providers.php';
        if (!file_exists($filename) || !is_readable($filename)) {
            throw new \Exception('File providers.php does not exist or is not readable.');
        }

        $providers = include_once $filename;

        foreach ($providers as $providerClass) {
            /**
                @var ServiceProviderInterface $provider
            */
            $provider = new $providerClass;

            $this->di->set($provider->getProviderName(), $provider);
            $provider->register($this->di);

        }

    }//end initializeProviders()

}