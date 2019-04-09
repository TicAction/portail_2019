<?php

namespace App\Http\ViewComposers;

use App\User;
use Illuminate\View\View;
use App\Repositories\UserRepository;

class TeacherComposer
{


    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $user = User::all()->sortBy('name');
        $user->load('students');
        $view->with('users', $user);
    }
}
