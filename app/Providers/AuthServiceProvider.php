<?php

namespace App\Providers;

use App\Models\Enums\UserRole;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('report-permission', function ($user) {
            return in_array($user->role_value, [
                UserRole::REPORTER,
            ]);
        });
    }
}
