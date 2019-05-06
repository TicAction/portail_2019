<?php

namespace App\Http\Controllers\DirectorAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function director()
    {
        return view('directors.director');
    }
}
