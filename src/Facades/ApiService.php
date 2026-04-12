<?php

namespace Rik5\ApiPlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rik5\ApiPlugin\ApiService
 */
class ApiService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rik5\ApiPlugin\ApiService::class;
    }
}
