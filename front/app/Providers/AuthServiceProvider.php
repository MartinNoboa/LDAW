<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('viewPanel', function($user) {
            $role = DB::table('permits_roles as pr')
            ->join('roles as r','pr.role_id','=','r.id')
            ->join('roles_users as ru','ru.role_id','=','r.id')
            ->select('permit_id')
            ->where('ru.user_id','=',$user->id)
            ->where('permit_id','=', 1);
            //dd(Auth::guest());
            
            return $role->count();
        });

        Gate::define('viewGames', function($user) {
            $role = DB::table('permits_roles as pr')
            ->join('roles as r','pr.role_id','=','r.id')
            ->join('roles_users as ru','ru.role_id','=','r.id')
            ->select('permit_id')
            ->where('ru.user_id','=',$user->id)
            ->where('permit_id','=', 3);

            
            
            return $role->count();
        });
    }
}
