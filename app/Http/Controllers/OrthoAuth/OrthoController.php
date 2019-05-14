<?php

namespace App\Http\Controllers\OrthoAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrthoController extends Controller
{

    public function ortho ()
    {

        return view('orthos.orthopedagogue');
    }
}
