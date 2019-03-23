<?php

namespace App\Http\ViewComposers;

use App\Student;
use Illuminate\View\View;
use App\Repositories\StudentRepository;
use Carbon\Carbon;
use Illuminate\Pagination;
use Illuminate\Support\Facades\Auth;

class StudentComposer
{


    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $students = Auth::user()->students->sortBy('lastname');

        $view->with('students', $students);
    }
}
