<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Schema::defaultStringLength(191);

      $userlist = \Cache::get('userlist', function () {
        $users = User::all();
        \Cache::put('userlist', $users, 120);

        return $users;
      });
      view()->share('users', $userlist);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
