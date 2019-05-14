<?php

namespace App\Http\Controllers\PneAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PneController extends Controller
{
    public function pne()
    {
        return view('pnes.pne');
    }
}
