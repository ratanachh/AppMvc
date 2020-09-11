<?php

namespace Framework;

class Application
{
    protected $app;
    public $router;
    public $request;
    public $di;

    public function __construct($di)
    {
        $this->di = $di;
    }

    public function handle($uri) 
    {
        // return $this->router->resolve();
    }

    public function getRootPath(): string
    {
        return $this->rootPath;

    }

    public function getRegisterClasses()
    {
        return $this->di->getKnownEntryNames();
    }
}