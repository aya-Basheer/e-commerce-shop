<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
   public function boot()
{
    $this->registerPolicies();

    Gate::define('access-admin-panel', function ($user) {
        $allowed = $user->is_admin ?? false;
        if (! $allowed) {
            Log::warning('Unauthorized admin panel access attempt', [
                'user_id' => $user->id ?? null,
                'email' => $user->email ?? null,
                'time' => now()->toDateTimeString(),
            ]);
        }
        return $allowed;
    });
}
}
