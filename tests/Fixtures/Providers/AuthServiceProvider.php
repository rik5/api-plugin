<?php

namespace Rik5\ApiPlugin\Tests\Fixtures\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Rik5\ApiPlugin\Tests\Fixtures\Models\Product;
use Rik5\ApiPlugin\Tests\Fixtures\Policies\ProductPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Product::class => ProductPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
