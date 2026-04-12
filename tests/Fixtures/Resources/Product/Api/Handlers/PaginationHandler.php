<?php

namespace Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\Api\Handlers;

use Rik5\ApiPlugin\Http\Handlers;
use Rik5\ApiPlugin\Tests\Fixtures\Resources\Product\ProductResource;
use Spatie\QueryBuilder\QueryBuilder;

class PaginationHandler extends Handlers
{
    public static ?string $uri = '/';
    public static ?string $resource = ProductResource::class;

    public function handler()
    {
        $model = static::getModel();

        $query = QueryBuilder::for($model)
            ->allowedFields($this->getAllowedFields() ?? [])
            ->allowedSorts($this->getAllowedSorts() ?? [])
            ->allowedFilters($this->getAllowedFilters() ?? [])
            ->allowedIncludes($this->getAllowedIncludes() ?? [])
            ->paginate(request()->query('per_page'))
            ->appends(request()->query());

        return static::getApiTransformer()::collection($query);
    }
}
