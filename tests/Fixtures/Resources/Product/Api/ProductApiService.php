<?php

namespace Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\Api;

use Rik5\ApiPlugin\ApiService;
use Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\Api\Handlers\CreateHandler;
use Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\Api\Handlers\DeleteHandler;
use Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\Api\Handlers\DetailHandler;
use Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\Api\Handlers\PaginationHandler;
use Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\Api\Handlers\UpdateHandler;
use Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\ProductResource;

class ProductApiService extends ApiService
{
    protected static ?string $resource = ProductResource::class;
    protected static ?string $groupRouteName = 'our-products'; // customize route name

    public static function handlers(): array
    {

        return [
            CreateHandler::class,
            UpdateHandler::class,
            DeleteHandler::class,
            PaginationHandler::class,
            DetailHandler::class,
        ];
    }
}
