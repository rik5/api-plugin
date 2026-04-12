<?php

namespace Rik5\ApiPlugin;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Rik5\ApiPlugin\Models\Token;
use Rik5\ApiPlugin\Policies\TokenPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Token::class => TokenPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void {}
}
