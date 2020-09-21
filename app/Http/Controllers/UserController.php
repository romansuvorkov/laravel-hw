<?php

namespace App\Http\Controllers;

use App\Facades\ConfigFacade;

class UserController extends Controller
{
    public function showInfo()
    {
        $userName = ConfigFacade::getName();
        $environment = ConfigFacade::getEnv();
        echo "User name is: $userName <br/>";
        echo "Environment is: $environment <br/>";
    }
}
