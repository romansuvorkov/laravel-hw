<?php

namespace App\Services;

use Illuminate\Support\Facades\App;

class ConfigService
{
    protected string $name;
    protected string $environment;

    public function __construct()
    {
        $this->name = $_ENV['NAME'];
        $this->environment = config('app.env');
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
