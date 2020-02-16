<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{


public function __construct()
{
    $this->middleware('auth');
}

    public function dashboard()
    {
        return view('back.index');
    }

}
