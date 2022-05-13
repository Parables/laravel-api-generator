<?php

namespace Parables\LaravelApiGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Parables\LaravelApiGenerator\LaravelApiGenerator
 */
class LaravelApiGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-api-generator';
    }
}
