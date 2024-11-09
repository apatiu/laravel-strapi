<?php

namespace Apatiu\LaravelStrapi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Apatiu\LaravelStrapi\LaravelStrapi
 */
class LaravelStrapi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Apatiu\LaravelStrapi\LaravelStrapi::class;
    }
}
