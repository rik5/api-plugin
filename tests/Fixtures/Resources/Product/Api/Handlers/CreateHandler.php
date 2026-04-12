<?php

namespace Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\Api\Handlers;

use Illuminate\Http\Request;
use Rik5\ApiPlugin\Http\Handlers;
use Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\ProductResource;

class CreateHandler extends Handlers
{
    public static ?string $uri = '/';
    public static ?string $resource = ProductResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    public function handler(Request $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, 'Successfully Create Resource');
    }
}
