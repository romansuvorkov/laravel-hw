<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Facades\GetEnvironment;

class UserController extends Controller
{
    public function showInfo()
    {
        $userName = GetEnvironment::getName();
        $environment = GetEnvironment::getEnv();
        echo "User name is: $userName <br/>";
        echo "Environment is: $environment <br/>";
    }
}
