<?php

namespace App\Classes;

use Illuminate\Support\Facades\App;

class GetEnvironment
{
    protected string $name;
    protected string $environment;

    public function __construct()
    {
        $this->name = $_ENV['NAME'];
        $this->environment = App::environment();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEnv(): string
    {
        return $this->environment;
    }

}
