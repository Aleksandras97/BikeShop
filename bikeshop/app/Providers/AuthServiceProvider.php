<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('patvirtinimoManagment', function($user){
          return $user->hasRoles('Administratorius','Pardavejas');
        });

        Gate::define('Prisijunges', function($user){
          return $user->hasAllRoles('Administratorius','Pardavejas','Pirkejas');
        });

        Gate::define('Admin', function($user){
          return $user->hasRole('Administratorius');
        });
    }
}
