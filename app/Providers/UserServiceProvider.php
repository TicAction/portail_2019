<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\User;
use App\Http\ViewComposers\TeacherComposer;
use App\Http\ViewComposers\BehaviorComposer;
use App\Http\ViewComposers\StudentComposer;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'inc.navbar',
            TeacherComposer::class
        );
        View::composer(
            'inc.behavior',
            BehaviorComposer::class
        );
        View::composer(
            'inc.student',
            StudentComposer::class
        );
    }
}
