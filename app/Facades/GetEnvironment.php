<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed getName()
 * @method static mixed getEnv()
 *
 * @see Illuminate\View\Factory
 */
class GetEnvironment extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'GetEnvironment'; }


}
