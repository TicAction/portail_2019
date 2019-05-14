<?php

namespace App\Http\Controllers\SpecialistAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialistController extends Controller
{
    public function specialist()
    {
        return view('specialists.specialist');
    }
}
