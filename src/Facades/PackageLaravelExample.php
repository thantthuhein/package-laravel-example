<?php

namespace ThantDev\PackageLaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ThantDev\PackageLaravelExample\PackageLaravelExample
 */
class PackageLaravelExample extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'package-laravel-example';
    }
}
