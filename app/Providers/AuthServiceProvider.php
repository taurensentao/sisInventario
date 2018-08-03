<?php

namespace sisInventario\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'sisInventario\Model' => 'sisInventario\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

         Gate::define('accessAdminpanel', function($user) {
        return $user->role(['superadmin', 'admin']);
    });

    // the gate checks if the user is a member
    Gate::define('accessProfile', function($user) {
        return view ('quienessomos');
    });
    }
}
