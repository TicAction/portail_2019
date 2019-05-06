<?php

namespace App\Http\Controllers\SdgAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SdgController extends Controller
{
    public function sdg()
    {
        return view('sdgs.sdg');
    }
}
