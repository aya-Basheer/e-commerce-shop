<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class AuthServiceProvider extends ServiceProvider
{
    /**

     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
         \App\Models\Product::class => \App\Policies\ProductPolicy::class,
    ];

   
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
