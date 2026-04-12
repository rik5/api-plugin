<?php

namespace Rik5\ApiPlugin\Traits;

use Rik5\ApiPlugin\Transformers\DefaultTransformer;

trait HasApiTransformer
{
    public static ?string $transformer = DefaultTransformer::class;

    public static function getApiTransformer()
    {
        return static::$transformer;
    }
}
