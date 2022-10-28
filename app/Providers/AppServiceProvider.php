<?php

namespace App\Providers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $users = User::with('roles')->paginate(5);
        // $users = User::paginate(5);
        $roles = Role::all();
        View::share('users', $users);
        View::share('roles', $roles);

        Paginator::useBootstrap();
    }
}
